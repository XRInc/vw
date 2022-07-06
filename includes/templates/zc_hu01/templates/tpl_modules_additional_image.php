<?php if (isset($productInfo['additional_image'])) { ?>
	<?php if (count($productInfo['additional_image']) > 1) { ?>
		<div class="row">
			<div class="col-md-3 hidden-sm hidden-xs">
				<div class="more-views">
					<ul>
						<?php foreach ($productInfo['additional_image'] as $_image) { ?>
							<li>
								<a href="<?php echo get_large_image($_image, POPUP_IMAGE_WIDTH, POPUP_IMAGE_HEIGHT); ?>" data-lightbox="lightbox-images">
									<img width="<?php echo ADDITIONAL_IMAGE_WIDTH; ?>" height="<?php echo ADDITIONAL_IMAGE_HEIGHT; ?>" src="<?php echo get_small_image($_image, ADDITIONAL_IMAGE_WIDTH, ADDITIONAL_IMAGE_HEIGHT); ?>" />
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div id="J_product">
					<?php foreach ($productInfo['additional_image'] as $_image) { ?>
						<a class="item" href="<?php echo get_large_image($_image, POPUP_IMAGE_WIDTH, POPUP_IMAGE_HEIGHT); ?>" data-lightbox="lightbox-images">
							<img alt="<?php echo $productInfo['nameAlt']; ?>" src="<?php echo get_small_image($_image, THUMBNAIL_IMAGE_WIDTH, THUMBNAIL_IMAGE_HEIGHT); ?>" />
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () {
				$('#J_product').owlCarousel({
					loop: true,
					items:1,
					nav:true
				})
			});
		</script>
	<?php } else { ?>
		<a href="<?php echo get_large_image($productInfo['image'], POPUP_IMAGE_WIDTH, POPUP_IMAGE_HEIGHT); ?>" data-lightbox="lightbox-images"><img alt="<?php echo $productInfo['nameAlt']; ?>" src="<?php echo get_large_image($productInfo['image'], THUMBNAIL_IMAGE_WIDTH, THUMBNAIL_IMAGE_HEIGHT); ?>" /></a>
	<?php } ?>
<?php } ?>

