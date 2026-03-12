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
		var asideMain = document.getElementById('aside_main');
		var asideBackdrop = document.getElementById('aside_backdrop');
		var asideToggles = document.querySelectorAll('.aside_toggle[data-aside-id="aside_main"]');
		var asideCloseButtons = document.querySelectorAll('.close_aside, #aside_main .open_support_chat, #aside_main a.link');

		function openAside() {
			if (!asideMain) {
				return;
			}
			asideMain.classList.add('open');
			if (asideBackdrop) {
				asideBackdrop.classList.add('open');
			}
			document.body.classList.add('slideout-open');
		}

		function closeAside() {
			if (!asideMain) {
				return;
			}
			asideMain.classList.remove('open');
			if (asideBackdrop) {
				asideBackdrop.classList.remove('open');
			}
			document.body.classList.remove('slideout-open');
		}

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

		asideToggles.forEach(function (button) {
			button.addEventListener('click', function (event) {
				event.preventDefault();
				openAside();
			});
		});

		asideCloseButtons.forEach(function (el) {
			el.addEventListener('click', function () {
				closeAside();
			});
		});

		if (asideBackdrop) {
			asideBackdrop.addEventListener('click', function () {
				closeAside();
			});
		}

		var countdown = document.querySelector('.casino-overview__countdown');
		if (countdown) {
			var hours = Number(countdown.getAttribute('data-deadline-hours')) || 18;
			var targetTs = Date.now() + hours * 60 * 60 * 1000;
			var dayEl = countdown.querySelector('[data-countdown-days]');
			var hourEl = countdown.querySelector('[data-countdown-hours]');
			var minEl = countdown.querySelector('[data-countdown-minutes]');
			var secEl = countdown.querySelector('[data-countdown-seconds]');

			function formatUnit(value) {
				return String(value).padStart(2, '0');
			}

			function updateCountdown() {
				var diff = Math.max(0, targetTs - Date.now());
				var totalSeconds = Math.floor(diff / 1000);
				var days = Math.floor(totalSeconds / 86400);
				var hoursLeft = Math.floor((totalSeconds % 86400) / 3600);
				var minutes = Math.floor((totalSeconds % 3600) / 60);
				var seconds = totalSeconds % 60;

				if (dayEl) dayEl.textContent = formatUnit(days);
				if (hourEl) hourEl.textContent = formatUnit(hoursLeft);
				if (minEl) minEl.textContent = formatUnit(minutes);
				if (secEl) secEl.textContent = formatUnit(seconds);
			}

			updateCountdown();
			window.setInterval(updateCountdown, 1000);
		}

		var winnersTable = document.getElementById('winners-table');
		if (winnersTable) {
			var winnerRows = Array.prototype.slice.call(winnersTable.querySelectorAll('tbody tr'));

			function randomFrom(list) {
				return list[Math.floor(Math.random() * list.length)];
			}

			function updateWinnerRow(row, index) {
				var gameNames = ['Gates of Olympus', 'Sweet Bonanza', 'Book of Dead', 'Big Bass Splash', 'Roulette Live', 'Blackjack Live'];
				var baseStake = Number((Math.random() * 4 + 0.5).toFixed(2));
				var mult = Number((Math.random() * 140 + 20).toFixed(1));
				var win = Number((baseStake * mult).toFixed(2));
				var player = 'UK_' + String.fromCharCode(65 + Math.floor(Math.random() * 26)) + Math.floor(Math.random() * 90 + 10);

				row.children[0].textContent = player;
				row.children[1].textContent = randomFrom(gameNames);
				row.children[2].textContent = 'GBP ' + baseStake.toFixed(2);
				row.children[3].textContent = 'GBP ' + win.toFixed(2);
				row.children[4].textContent = 'x' + mult.toFixed(1);
				row.children[5].textContent = index === 0 ? 'just now' : (index + 1) + ' min ago';
			}

			window.setInterval(function () {
				winnerRows.forEach(updateWinnerRow);
			}, 6000);
		}

		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
