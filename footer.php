<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alustar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="web_developer">
				<a href="#" class="btn btn-default">WEB-DEVELOPER</a><span> | </span><a href="https://drogalov.com/" class="btn btn-warning">DROGALOV.COM</a>
			</div>
		</div>
		<a href="#feedback_form" class="callback">
			<div class="back-call-block__button-area">
				<div class="back-call-block__button-icon"></div>
			</div>
		</a>
		<a class="mobile_none" href="tel:<?php echo ot_get_option( 'phone' ); ?>" title="Номер телефона: <?php echo ot_get_option( 'phone' ); ?>">
			<div class="back-call-block__button-area">
				<div class="back-call-block__button-icon"></div>
			</div>
		</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
