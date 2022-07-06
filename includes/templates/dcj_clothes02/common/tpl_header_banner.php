<div class="header-banner">
    <?php if (IS_ZP == 0) { ?>
	<div class="banner-block1" id="J_owl">
		<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5&sort=ordered_desc'); ?>">
            <img class="hidden-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide1.jpg" alt="" />
            <img class="hidden-lg hidden-md hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide1_m.jpg" alt="" />
		</a>
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5&sort=ordered_desc'); ?>">
            <img class="hidden-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide2.jpg" alt="" />
            <img class="hidden-lg hidden-md hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide2_m.jpg" alt="" />
        </a>
        <!--<a class="item" href="<?php /*echo href_link(FILENAME_CATEGORY, 'cID=5&sort=ordered_desc'); */?>">
            <img class="hidden-xs" src="<?php /*echo DIR_WS_TEMPLATE_IMAGES; */?>banners/slide3.jpg" alt="" />
            <img class="hidden-lg hidden-md hidden-sm" src="<?php /*echo DIR_WS_TEMPLATE_IMAGES; */?>banners/slide3_m.jpg" alt="" />
        </a>-->
	</div>
    <?php } else { ?>
    <div class="banner-block1">
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>">
            <img class="hidden-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner_zp.jpg" alt="" />
            <img class="hidden-lg hidden-md hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/bannerm_zp.jpg" alt="" />
        </a>
    </div>
    <?php } ?>
	<!--<div >
		<?php /*if (IS_ZP == 0) { */?>
			<img src="<?php /*echo DIR_WS_TEMPLATE_IMAGES; */?>banners/logo.png" alt="" style="z-index: 1;margin-top: -90% ;width: 13%;"/>
		<?php /*} else { */?>
			<img src="<?php /*echo DIR_WS_TEMPLATE_IMAGES; */?>banners/logo_zp.png" alt="" style="z-index: 1;margin-top: -90% ;width: 13%;"/>
		<?php /*} */?>
	</div>-->
	<!--<div class="dtile">
		<a href="<?php /*echo href_link(FILENAME_CATEGORY, 'cID=10'); */?>" style="color: white">SHOW  NOW</a>
	</div>-->
</div>
<div class="main-container">
	<div class="contmore" style="margin: 0 auto">
		<div style="width: 96%;margin: 0 auto">
			<?php require($template->get_template_dir('tpl_modules_bestsellers.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_bestsellers.php'); ?>
		</div>
	</div>
	<!--<div class="gd">
		<marquee behavior="scroll" contenteditable="true" onstart="this.firstChild.innerHTML+=this.firstChild.innerHTML;" scrollamount="10" width="100%" onmouseover="this.stop();" onmouseout="this.start();">
			<span style="z-index: 1; font-size: 0.5vw;color: #003abf">London - 08. 01. 2018</span>	“I’m a fashion designer and activist. “You all know what I’m up to, I use fashion as a vehicle for activism to stop climate change and mass extinction of life on earth.”
		</marquee>
	</div>-->
		<div class="cont" style="width: 100%;height: auto;margin-top: 2%">
			<div >
                <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>">
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>jewellery.jpg" alt="" width="50%"/>
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>jewellery_zp.jpg" alt="" width="50%"/>
				<?php } ?>
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>bgr.png" alt="" width="50%" style="float: right"/>
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>bgr_zp.png" alt="" width="50%" style="float: right"/>
				<?php } ?>
                </a>
			</div>
			<?php if (IS_ZP == 0) { ?>
			<div class="contp">
				<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=4'); ?>" style="display: block; margin-top: 8%;">BRACELETS</a><br>
				<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=3'); ?>" style="display: block; margin-top: 8%">EARRINGS</a><br>
				<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" style="display: block; margin-top: 8%">NECKLACES</a><br>
				<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>" style="display: block; margin-top: 8%">RINGS</a>
			</div>
			<?php } else { ?>
			
			<?php } ?>
		</div>

	<div class="dow">
        <?php require($template->get_template_dir('tpl_modules_new_products.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_new_products.php'); ?>
	</div>
	<div class="header-banner" style="margin-top:3%;">
		<div class="banner-block1" id="J_owl1">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>">
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>inside.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>inside_zp.jpg" alt="" />
				<?php } ?>
			</a>
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>">
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>inside2.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>inside2_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<?php if (IS_ZP == 0) { ?>
		<div class="contd">
			<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>" style="color: white"> INSIDE</a><br>
			<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>" style="color: white"> VIVIENNE WESTWOOD</a><br>
			<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=5'); ?>" style="color: white;font-size: 1.5vw;"> DISCOVER MORE</a>
		</div>
		<?php } else { ?>
					
		<?php } ?>
	</div>
<div class="bestsellers"  style="width: 96%;margin: 0 auto;">
	<div class="owl-banner-box" id="my_ow">
		<div class="products-grid" style="display: block; width: 98%;">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>1.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>1_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="display: block;width: 98%;">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>2.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>2_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%;">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>3.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>3_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>4.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>4_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>5.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>5_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>6.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>6_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>7.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>7_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
		<div class="products-grid" style="width: 98%">
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" >
				<?php if (IS_ZP == 0) { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>8.jpg" alt="" />
				<?php } else { ?>
					<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>8_zp.jpg" alt="" />
				<?php } ?>
			</a>
		</div>
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
    <script type="text/javascript">
        $(function () {
            $('#J_owl1').owlCarousel({
                items:1,
                loop:true,
                nav:true,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true
            })
        });
    </script>
<script type="text/javascript">
	$(function () {
		$('#my_ow').owlCarousel({
			loop:true,
			nav:false,
			dots:false,
			margin:15,
			responsive:{
				100:{
					items:3
				},
				750:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});
	});
</script>
