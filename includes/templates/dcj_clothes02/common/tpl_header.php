<div class="header-container">
	<div class="container">
		<p class="welcome-msg"><?php echo STORE_WELCOME; ?></p>
	</div>
</div>
<div class="pc-header hidden-xs hidden-sm">
	<div class="header">
		<!--<a href="<?php /*echo href_link(FILENAME_INDEX); */?>" title="<?php /*echo HEADER_LOGO_ALT; */?>" class="logo">
			<img src="<?php /*echo DIR_WS_TEMPLATE_IMAGES; */?>banners/logo.png" alt="" />
		</a>-->
		<ul class="links">
			<li class="link-search">
				<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="pc_search_mini_form">
					<div class="form-search">
						<?php if (USE_URL_REWRITE == 0){ ?>
							<input type="hidden" value="search" name="main_page">
						<?php } ?>
						<input type="text" class="input-text" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" id="pcSearch" />
						<button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont f-25">&#xe630;</i></button>
					</div>
				</form>
			</li>
			<li><a title="<?php echo __('Order Check'); ?>" href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>" rel="external nofollow"><?php /*echo __('Order Check'); */?></a></li>
			<li><a class="link-account" title="<?php echo __('My Account'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont">&#xe699;</i><?php /*echo __('My Account'); */?></a></li>
			<li><a class="link-cart" title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><i class="iconfont">&#xe600;</i><?php /*echo __('My Cart'); */?></a></li>
			<li><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
		</ul>
		<div class="nav-container" >
			<div id="nav">
				<ul class="level1">
					<li>
					<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo">
                        <?php if (IS_ZP == 0) { ?>
                            <img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="" width="60"/>
                        <?php } else { ?>
                            <img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo_zp.png" alt="" />
                        <?php } ?>
                    </a>
					</li>
				</ul>
				<?php echo $category_tree->buildHeaderTree(0,2); ?>
			</div>
		</div>
	</div>
</div>
<?php echo ONLINE_SERVICE; ?>
<div class="mobile-header hidden-md hidden-lg">
	<div class="header">
		<div class="col-xs-3 col-sm-3"><a href="javascript:;" class="category-tree a-left"><i class="iconfont f-25">&#xe64c;</i></a></div>
		<div class="col-xs-6 col-sm-6">
			<a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>">
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>" width="35%"/>
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo_zp.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>" width="35%"/>
				<?php } ?>
			</a>
		</div>
		<div class="col-xs-3 col-sm-3"><a class="link-cart a-right" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><i class="iconfont f-25">&#xe600;</i></a>
		</div>
	</div>
	<div class="left-menu" id="menu" data-scroll="">
		<div class="layer-tree" onclick="hideCategory();"></div>
		<div class="left-category">
			<div class="menu-header">
				<span class="button btn-layer" onclick="hideCategory();"><i class="iconfont f-25">&#xe601;</i></span>
				<div class="header-search" id="header-search">
					<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="m_search_mini_form">
						<div class="form-search">
							<?php if (USE_URL_REWRITE == 0){ ?>
								<input type="hidden" value="search" name="main_page">
							<?php } ?>
							<input type="text" class="input-text" value="" name="q" id="mSearch" maxlength="100" placeholder="Search" />
							<button class="button" title="<?php echo __('Go'); ?>" type="submit" onclick=""><i class="iconfont f-25">&#xe630;</i></button>
						</div>
					</form>
				</div>
			</div>
			<div class="category-list">
				<ul class="level1">
					<?php
					$categoryTree = $category_tree->getData();
					ksort($categoryTree);
					?>
					<?php if (isset($categoryTree[0])) { ?>
						<?php foreach ($categoryTree[0] as $val) { ?>
							<?php if (isset($categoryTree[$val['id']])) { ?>
								<li class="category-top">
									<span class="all-category" onclick="$(this).nextAll('ul.mobile-memu').show().animate({left:0},200);"><i class="iconfont f-20">&#xe69b;</i></span>
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
									<ul class="mobile-memu">
										<li class="category-title"><a href="javascript:;" class="return" onclick="$(this).closest('ul.mobile-memu').animate({left:'100%'},200).hide(200);"><i class="iconfont f-20">&#xe69a;</i><?php echo $val['name']; ?></a></li>
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
					<!--<li class="cms">
						<a class="title" href="javascript:;"><?php /*echo __('Company Info'); */?></a>
						<ul class="links">
							<li><a title="<?php /*echo __('About Us'); */?>" href="<?php /*echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); */?>" rel="external nofollow"><?php /*echo __('About Us'); */?></a></li>
							<li><a title="<?php /*echo __('Contact Us'); */?>" href="<?php /*echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); */?>" rel="external nofollow"><?php /*echo __('Contact Us'); */?></a></li>
							<li><a title="<?php /*echo __('Privacy & Security'); */?>" href="<?php /*echo href_link(FILENAME_CMS_PAGE, 'cpID=3'); */?>" rel="external nofollow"><?php /*echo __('Privacy & Security'); */?></a></li>
							<li><a title="<?php /*echo __('Returns Policy'); */?>" href="<?php /*echo href_link(FILENAME_CMS_PAGE, 'cpID=5'); */?>" rel="external nofollow"><?php /*echo __('Returns Policy'); */?></a></li>
							<li><a title="<?php /*echo __('Site Map'); */?>" href="<?php /*echo href_link(FILENAME_SITE_MAP); */?>" rel="external nofollow"><?php /*echo __('Site Map'); */?></a></li>
						</ul>
					</li>-->
					<li class="currency"><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
$(function(){
	var mTop = $('.mobile-header').offset().top;
	var pTop = $('.pc-header').offset().top;
	$(window).scroll(function(){
		var scrolltop =  $(document).scrollTop();
		if(scrolltop > mTop){
			$('.mobile-header .header').addClass('header-fixed');
		} else {
			$('.mobile-header .header').removeClass('header-fixed');
		}
		if(scrolltop > pTop){
			$('.pc-header .header').addClass('header-fixed');
		} else {
			$('.pc-header .header').removeClass('header-fixed');
		}
	});

	$('.category-tree').on('click',function(){
		$('.left-menu').fadeIn();
		$('html').addClass('noscroll');
		$.smartScroll('menu','.category-list');
	});

	$('.cms').on('click',function(){
		$(this).find('.links').slideToggle(250);
		$(this).toggleClass('active');
	})
});

function hideCategory() {
	$('.left-menu').fadeOut();
	$('html').removeClass('noscroll');
}
</script>