<?php
/**
 * init_includes init_mobile.php
 */
$_isMobile = false;
require(DIR_FS_CATALOG_CLASSES . 'Mobile_Detect.php');
$mobileDetect = new Mobile_Detect();
if ('true' == ENABLE_MOBILE
	&& $mobileDetect->isMobile()) {
	$_isMobile = true;
}

// 数据库配置OA_API常量初始化
$configuration = $db->Execute("SELECT configuration_key, configuration_value FROM " . TABLE_CONFIGURATION . " WHERE configuration_key LIKE 'OA_API_%'", '', true, 604800);
while (!$configuration->EOF) {
	if(!defined(strtoupper($configuration->fields['configuration_key']))) {
		define(strtoupper($configuration->fields['configuration_key']), $configuration->fields['configuration_value']);
	}
	$configuration->MoveNext();
}

// 使用OA的接口获取IP对应的信息
if (isset($_COOKIE['ip_check_json'])) {
	$ipCheckData = json_decode($_COOKIE['ip_check_json'], true);
} else {
	if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
		$checkIp = $_SERVER['HTTP_CF_CONNECTING_IP'];
	} else {
		if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
			$checkIp = getenv('HTTP_CLIENT_IP');
		} elseif (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
			$checkIp = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
			$checkIp = getenv('REMOTE_ADDR');
		} elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
			$checkIp = $_SERVER['REMOTE_ADDR'];
		}
	}

	// IP历史表
	$sql = "SELECT ip_address, is_facebook, continent_code, country_code
			FROM   " . TABLE_IP_HISTORY . "
			WHERE  ip_address = :ipAddress
			LIMIT  1";
	$sql = $db->bindVars($sql, ':ipAddress', $checkIp, 'string');
	$ipHistoryResult = $db->Execute($sql, '', true, 100);

	if ($ipHistoryResult->RecordCount() > 0) {
		$ipCheckData = array(
			'ipAddress'     => $ipHistoryResult->fields['ip_address'],
			'isFacebook'    => $ipHistoryResult->fields['is_facebook'],
			'continentCode' => $ipHistoryResult->fields['continent_code'],
			'countryCode'   => $ipHistoryResult->fields['country_code']
		);
		$ipCheckJson = json_encode($ipCheckData);
	} else {
		$ipCheckJson = file_get_contents(OA_API_URL . '/api/ip/getCountry/' . OA_API_TOKEN . '/' . $checkIp . '/httpUserAgent/' . base64_encode($_SERVER['HTTP_USER_AGENT']) . '/httpAcceptLanguage/' . base64_encode($_SERVER['HTTP_ACCEPT_LANGUAGE']), false, stream_context_create(array('http' => array('header' => array('User-Agent: dbip-api-client')))));
		$ipCheckData = json_decode($ipCheckJson, true);
	}

	setcookie('ip_check_json', $ipCheckJson, time() + 60 * 60 * 24 * 180, '/', '', false);
}
$ipCheck = false;

// 审核站和产品站数据显示 2:根据规则显示 3:m端根据规则显示
if (OA_API_IP_CHECK_SWITCH >= '2') {
	if (isset($ipCheckData['countryCode'])
		&& $ipCheckData['isFacebook'] == '0'
		&& strstr($ipCheckData['ISP'], 'Facebook') == false) {

		if (OA_API_IP_CHECK_TYPE == '1') {
			// 允许IP验证
			if ((OA_API_IP_CHECK_COUNTRY == '' || strstr(OA_API_IP_CHECK_COUNTRY, $ipCheckData['countryCode']) != false)
				&& (OA_API_IP_CHECK_CONTINENT == '' || strstr(OA_API_IP_CHECK_CONTINENT, $ipCheckData['continentCode']) != false)) {
				if (OA_API_IP_CHECK_SWITCH == '2') {
					$ipCheck = true;
				} elseif (OA_API_IP_CHECK_SWITCH == '3' && $mobileDetect->isMobile()) {
					$ipCheck = true;
				}
			}
		} else {
			// 禁止IP验证
			if ((OA_API_IP_CHECK_COUNTRY == '' || strstr(OA_API_IP_CHECK_COUNTRY, $ipCheckData['countryCode']) == false)
				&& (OA_API_IP_CHECK_CONTINENT == '' || strstr(OA_API_IP_CHECK_CONTINENT, $ipCheckData['continentCode']) == false)) {
				if (OA_API_IP_CHECK_SWITCH == '2') {
					$ipCheck = true;
				} elseif (OA_API_IP_CHECK_SWITCH == '3' && $mobileDetect->isMobile()) {
					$ipCheck = true;
				}
			} else {
				if (OA_API_IP_CHECK_SWITCH == '2') {
					$ipCheck = false;
				} elseif (OA_API_IP_CHECK_SWITCH == '3' && $mobileDetect->isMobile()) {
					$ipCheck = false;
				}
			}
		}
	}
} else { // 1:显示产品站 0:显示审核站
	$ipCheck = OA_API_IP_CHECK_SWITCH == '1' ? true : false;
}

if (isset($ipHistoryResult) && $ipHistoryResult->RecordCount() == 0) {
	$sql_data_array = array(
		array('fieldName'=>'ip_address', 'value'=>$ipCheckData['ipAddress'], 'type'=>'string'),
		array('fieldName'=>'is_facebook', 'value'=>$ipCheckData['isFacebook'], 'type'=>'integer'),
		array('fieldName'=>'continent_code', 'value'=>$ipCheckData['continentCode'], 'type'=>'string'),
		array('fieldName'=>'country_code', 'value'=>$ipCheckData['countryCode'], 'type'=>'string'),
		array('fieldName'=>'http_request', 'value'=>$_SERVER['REQUEST_URI'], 'type'=>'string'),
		array('fieldName'=>'http_referer', 'value'=>(strstr($_SERVER['HTTP_REFERER'], HTTP_SERVER) != false) ? str_replace(HTTP_SERVER, '', $_SERVER['HTTP_REFERER']) : $_SERVER['HTTP_REFERER'], 'type'=>'string'),
		array('fieldName'=>'http_user_agent', 'value'=>$_SERVER['HTTP_USER_AGENT'], 'type'=>'string'),
		array('fieldName'=>'is_zp', 'value'=>$ipCheck == true ? '0' : '1', 'type'=>'integer'),
		array('fieldName'=>'date_added', 'value'=>'NOW()', 'type'=>'noquotestring')
	);
	$db->perform(TABLE_IP_HISTORY, $sql_data_array);
}

if ($ipCheck) {
	// 是否跳转
	if (OA_API_IP_CHECK_JUMP == '') {
		define('DB_SUFFIX', '');
		define('IS_ZP', '0');
	} else {
		die('<!DOCTYPE html><html><body><script>document.location=("' . OA_API_IP_CHECK_JUMP . '");</script></body></html>');
	}
} else {
	if (OA_API_IP_CHECK_JUMP == '') {
		define('DB_SUFFIX', '_zp');
		define('IS_ZP', '1');
	} else {
		define('DB_SUFFIX', '');
		define('IS_ZP', '0');
	}
}

define('TABLE_CATEGORY', DB_PREFIX . 'category' . DB_SUFFIX);
define('TABLE_PRODUCT', DB_PREFIX . 'product' . DB_SUFFIX);
define('TABLE_PRODUCT_ATTRIBUTE', DB_PREFIX . 'product_attribute' . DB_SUFFIX);
define('TABLE_PRODUCT_OPTION', DB_PREFIX . 'product_option' . DB_SUFFIX);
define('TABLE_PRODUCT_OPTION_VALUE', DB_PREFIX . 'product_option_value' . DB_SUFFIX);
define('TABLE_PRODUCT_REVIEW', DB_PREFIX . 'product_review' . DB_SUFFIX);
define('TABLE_PRODUCT_TO_CATEGORY', DB_PREFIX . 'product_to_category' . DB_SUFFIX);

// 根据IP设置默认国家
if (isset($ipCheckData['countryCode'])) {
	$sql = "SELECT country_id
			FROM   " . TABLE_COUNTRY . "
			WHERE  iso_code_2 = :isoCode2
			LIMIT  1";
	$sql = $db->bindVars($sql, ':isoCode2', $ipCheckData['countryCode'], 'string');
	$result = $db->Execute($sql, '', true, 604800);
	if ($result->RecordCount() > 0) {
		define('STORE_COUNTRY', $result->fields['country_id']);
	}
}
