<div class="header-banner">
	
        <?php if (IS_ZP == 0) { ?>
			<div class="banner-block1" id="J_owl">
				<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=35'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1.jpg" alt="" /></a>
				<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=35'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner2.jpg" alt="" /></a>
			</div>
        <?php } else { ?>
			<div class="banner-block1">
				<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=12'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1_zp.jpg?v52" alt="" /></a>
			</div>	
       <?php } ?>
</div>
<script type="text/javascript">
$(function () {
	$('#J_owl').owlCarousel({
		items:1,
		loop:true,
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true
	})
});
</script>
