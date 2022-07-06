<?php if (IS_ZP == 0) { ?>
	<?php require($template->get_template_dir('tpl_modules_bestsellers.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_bestsellers.php'); ?>
	<?php require($template->get_template_dir('tpl_modules_featured.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_featured.php'); ?>
<?php } else { ?>
	<?php require($template->get_template_dir('tpl_modules_new_products.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_new_products.php'); ?>
<?php } ?>
