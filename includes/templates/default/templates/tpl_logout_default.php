<div class="page-title">
	<h1><?php echo __('You are now logged out'); ?></h1>
</div>
<p><?php echo __('You have logged out and will be redirected to our homepage in 5 seconds.'); ?></p>
<script type="text/javascript"><!--
setTimeout(function(){ location.href = '<?php echo href_link(FILENAME_INDEX); ?>'},5000);
//--></script>
