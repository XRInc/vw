<?php
/**
 * init_includes init_db_config_read.php
 */
// 数据库配置常量初始化
$configuration = $db->Execute("SELECT configuration_key, configuration_value FROM " . TABLE_CONFIGURATION, '', true, 604800);
while (!$configuration->EOF) {
	if(!defined(strtoupper($configuration->fields['configuration_key']))) {
		define(strtoupper($configuration->fields['configuration_key']), $configuration->fields['configuration_value']);
	}
	$configuration->MoveNext();
}
