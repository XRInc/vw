<div class="header-container hidden-xs hidden-sm">
	<div>
		<p class="welcome-msg"><?php echo STORE_WELCOME; ?></p>
		<div class="hidden-xs hidden-sm">
			<ul class="links">
				<li><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				<li><a title="<?php echo __('Order Check'); ?>" href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('Order Check'); ?></a></li>
				<li><a class="link-account" title="<?php echo __('My Account'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo __('My Account'); ?></a></li>
				<li><a class="link-cart" title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><i class="iconfont f-18">&#xe619;</i></a></li>
			</ul>
		</div>
	</div>
</div>
<div class="pc-header hidden-xs hidden-sm">
	<div class="header">
		<div>
			<ul class="logo-container">
				<li>
					<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo"><strong><?php echo HEADER_LOGO_ALT; ?></strong>
							<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo<?php echo (IS_ZP == 0) ? '' : '_zp'; ?>.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>"/>
					</a>
				</li>
			</ul>
			<div class="nav-container">
				<div id="nav">
					<?php echo $category_tree->buildHeaderTree(0,3); ?>
				</div>
			</div>
			<ul class="links">
				<li class="link-search search-psa">
					<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="pc_search_mini_form">
						<div class="form-search">
							<?php if (USE_URL_REWRITE == 0){ ?>
								<input type="hidden" value="search" name="main_page">
							<?php } ?>
							<input type="text" class="input-text" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" id="pcSearch" placeholder="Search" />
							<button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont f-18">&#xe61d;</i></button>
						</div>
					</form>
				</li>
			</ul>
		</div>
	</div>
	<div class="header header-fixed">
		<div class="container">
			<ul class="links">
				<li><a class="link-account" title="<?php echo __('My Account'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont f-18">&#xe699;</i></a></li>
				<li><a class="link-cart" title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><i class="iconfont f-18">&#xe619;</i></a></li>
			</ul>
			<ul class="logo-container">
				<li>
					<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo"><strong><?php echo HEADER_LOGO_ALT; ?></strong>
							<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo<?php echo (IS_ZP == 0) ? '' : '_zp'; ?>.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>"/>
					</a>
				</li>
			</ul>
			<div class="nav-container">
				<div id="nav">
					<?php echo $category_tree->buildHeaderTree(0,3); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo ONLINE_SERVICE; ?>
<div class="m-header-container hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 col-sm-3"><a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>">
						<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo<?php echo (IS_ZP == 0) ? '' : '_zp'; ?>.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>"/>
				</a></div>
			<div class="col-xs-9 col-sm-9 no-padding">
				<p class="welcome-msg"><?php echo STORE_WELCOME; ?></p>
			</div>
		</div>
	</div>
</div>
<div class="mobile-header hidden-md hidden-lg">
	<div class="header">
		<div class="m-header-top">
			<div class="col-xs-4 col-sm-4"><a href="javascript:;" class="category-tree a-left"><i class="iconfont icon-mulu f-18"></i><span><?php echo __('Menu'); ?></span></a></div>
			<div class="col-xs-4 col-sm-4 col-xs-push-4 col-sm-push-4">
				<div class="row">
					<div class="col-xs-4 col-sm-4">
						<a class="search-btn" href="javascript:;"><i class="iconfont icon-sousuo1 f-18"></i></a>
					</div>
					<div class="col-xs-4 col-sm-4">
						<a class="link-account" title="<?php echo __('My Account'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont f-18">&#xe699;</i></a>
					</div>
					<div class="col-xs-4 col-sm-4">
						<a class="link-cart a-right" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><i class="iconfont f-18">&#xe619;</i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-search" id="header-search">
			<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="m_search_mini_form">
				<div class="form-search">
					<?php if (USE_URL_REWRITE == 0){ ?>
						<input type="hidden" value="search" name="main_page">
					<?php } ?>
					<input type="text" class="input-text" value="" name="q" id="mSearch" maxlength="100" placeholder="Search" />
					<button class="button" title="<?php echo __('Go'); ?>" type="submit" onclick=""><i class="iconfont f-18">&#xe61d;</i></button>
				</div>
			</form>
		</div>
	</div>
	<div class="left-menu" id="menu" data-scroll="">
		<div class="layer-tree" onclick="hideCategory();"></div>
		<div class="left-category">
			<div class="category-list">
				<ul class="level1">
					<li><a href="<?php echo href_link(FILENAME_INDEX); ?>"><?php echo __('Home'); ?></a></li>
					<?php
					$categoryTree = $category_tree->getData();
					ksort($categoryTree);
					?>
					<?php if (isset($categoryTree[0])) { ?>
						<?php foreach ($categoryTree[0] as $val) { ?>
							<?php if (isset($categoryTree[$val['id']])) { ?>
								<li class="category-top">
									<span class="all-category" onclick="$(this).nextAll('ul.mobile-memu').show().animate({left:0},200);"><i class="iconfont f-20">&#xe92e;</i></span>
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
									<ul class="mobile-memu">
										<li class="category-title"><a href="javascript:;" class="return" onclick="$(this).closest('ul.mobile-memu').animate({left:'100%'},200).hide(200);"><i class="iconfont f-20">&#xe92d;</i><?php echo $val['name']; ?></a></li>
										<?php foreach ($categoryTree[$val['id']] as $v) { ?>
											<li class="category-product">
												<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $v['id']); ?>"><?php echo $v['name']; ?></a>
											</li>
										<?php } ?>
									</ul>
								</li>
							<?php } else { ?>
								<li class="category-product">
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
								</li>
							<?php } ?>
						<?php } ?>
					<?php } ?>
					<?php if (isset($_SESSION['customer_id'])) { ?>
						<li><a title="<?php echo __('Log Out'); ?>" href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>"><?php echo __('Log Out'); ?></a></li>
					<?php } else { ?>
						<li><a title="<?php echo __('Log In'); ?>" href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo __('Log In'); ?></a></li>
					<?php } ?>
					<li><a href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>"><?php echo __('Order Check'); ?></a></li>
					<li class="cms">
						<a class="title" href="javascript:;"><?php echo __('Company Info'); ?></a>
						<ul class="links">
							<li><a title="<?php echo __('About Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); ?>" rel="external nofollow"><?php echo __('About Us'); ?></a></li>
							<li><a title="<?php echo __('Contact Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>" rel="external nofollow"><?php echo __('Contact Us'); ?></a></li>
							<li><a title="<?php echo __('Privacy & Security'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=3'); ?>" rel="external nofollow"><?php echo __('Privacy & Security'); ?></a></li>
							<li><a title="<?php echo __('Returns Policy'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=5'); ?>" rel="external nofollow"><?php echo __('Returns Policy'); ?></a></li>
							<li><a title="<?php echo __('Site Map'); ?>" href="<?php echo href_link(FILENAME_SITE_MAP); ?>" rel="external nofollow"><?php echo __('Site Map'); ?></a></li>
						</ul>
					</li>
					<li class="currency"><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
$(function(){
	var pTop = $('.pc-header').offset().top;
	$(window).scroll(function(){
		var scrolltop =  $(document).scrollTop();
		if(scrolltop > pTop){
			$('.pc-header .header.header-fixed').fadeIn();
		} else {
			$('.pc-header .header.header-fixed').fadeOut();
		}
	});


	$('.category-tree').on('click',function(){
		$('.left-menu').fadeToggle();
		$('html').toggleClass('noscroll');
		$(this).find('i.iconfont').toggleClass('icon-mulu icon-cha-copy');
		$.smartScroll('menu','.category-list');

		var spanTxt = $(this).find('span').html();
		if (spanTxt === 'Menu') {
			$(this).find('span').html('Close');
		} else if (spanTxt === 'Close') {
			$(this).find('span').html('Menu');
		}
	});

	$('.cms').on('click',function(){
		$(this).find('.links').slideToggle(250);
		$(this).toggleClass('active');
	});

	$('.search-btn').on('click', function () {
		$('.mobile-header .header-search').fadeToggle();
		$(this).find('i.iconfont').toggleClass('icon-sousuo1 icon-cha-copy');
	});

});

function hideCategory() {
	$('.left-menu').fadeOut();
	$('html').removeClass('noscroll');
}
</script>