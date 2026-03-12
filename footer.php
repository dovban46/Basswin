<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->
	<?php get_template_part( 'template-parts/footer-main' ); ?>

</div><!-- #page -->

<div class="panel_fixed fixed">
	<div class="panel_fixed_menu">
		<a href="#" class="item">
			<i class="icon icon-casino"></i>
			<span class="caption">GAMES</span>
		</a>
		<a href="#" class="item">
			<i class="icon icon-sport"></i>
			<span class="caption">Sport</span>
		</a>
		<button type="button" class="item signup" data-toggle="ajax-modal" data-href="#" data-modal-id="login-modal">
			<i class="icon icon-signup"></i>
			<span class="caption">Sign up</span>
		</button>
		<a href="#" class="item">
			<i class="icon icon-promo"></i>
			<span class="caption">Promotions</span>
		</a>
	</div>
</div>

<div id="scrollUp" class="button_go_top active"><i class="icon icon-chevron-up"></i></div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var header = document.querySelector('header');
		var scrollUpButton = document.getElementById('scrollUp');

		function onScroll() {
			var scrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;

			if (header) {
				header.classList.toggle('is-scrolled', scrollTop > 4);
			}

			if (scrollUpButton) {
				scrollUpButton.classList.toggle('active', scrollTop > 240);
			}
		}

		if (scrollUpButton) {
			scrollUpButton.addEventListener('click', function () {
				window.scrollTo({ top: 0, behavior: 'smooth' });
			});
		}

		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
