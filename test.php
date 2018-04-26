
<!-- saved from url=(0078)http://dimsemenov.com/plugins/magnific-popup/site-assets/ajax/test-ajax-2.html -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body cz-shortcut-listen="true">\
	<div id="feedback_form" class="feedback_form_popup mfp-hide white-popup-block">
		<div class="title"><?php echo ot_get_option( 'feedback_title' ); ?></div>
		<?php if (ot_get_option( 'feedback_form' )) { ?>
		<?php echo do_shortcode( ot_get_option( 'feedback_form' ) ); ?>
		<?php } ?>
	</div>
		
</body>
</html>