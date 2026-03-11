<?php
/**
 * Front page template.
 *
 * @package twentynineteen-child
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="header_tabs">
		<div class="header-btn">
			<div class="header-btn-group">
				<a href="#" class="button primary">
					<span class="caption">GAMES</span>
				</a>
				<a href="#" class="button">
					<span class="caption">LIVE CASINO</span>
				</a>
			</div>
			<button type="button" class="button compact" data-toggle="ajax-modal" data-href="#" data-modal-id="search-modal">
				<i class="icon icon-search"></i>
			</button>
		</div>
	</section>

	<section class="section_banners container">
		<div id="banners" class="banners">
			<a href="#" class="item_banner is-active" data-slide-index="0">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dc187577f881199541.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dc18a29f8808361735.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="1">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dc81d4b82447081367.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dc8213ccc766585026.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="2">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd36b127d189100563.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd36e86a5847874781.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="3">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd5561511569874377.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd5596095257715341.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="4">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd98763af449319504.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968dd989ce03059525616.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="5">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968ddd1237ea463055635.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968ddd163400705249082.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="6">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de22ece43005978493.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de232d110453542925.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="7">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de3c7fcea802731256.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de3cae2bd138204939.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<a href="#" class="item_banner" data-slide-index="8">
				<div class="image_wrap">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de4e7c92c152457072.png' ); ?>" class="image desktop" alt="">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/banners/6968de4eaec46247019297.png' ); ?>" class="image mobile" alt="">
				</div>
			</a>
			<ul class="slick-dots" role="tablist">
				<li class="slick-active" data-slide-to="0"><button type="button">1</button></li>
				<li data-slide-to="1"><button type="button">2</button></li>
				<li data-slide-to="2"><button type="button">3</button></li>
				<li data-slide-to="3"><button type="button">4</button></li>
				<li data-slide-to="4"><button type="button">5</button></li>
				<li data-slide-to="5"><button type="button">6</button></li>
				<li data-slide-to="6"><button type="button">7</button></li>
				<li data-slide-to="7"><button type="button">8</button></li>
				<li data-slide-to="8"><button type="button">9</button></li>
			</ul>
		</div>
	</section>

	<?php
	ob_start();
	get_template_part( 'template-parts/home-sections' );
	$home_sections = ob_get_clean();
	// Remove possible BOM/leading whitespace before first section.
	echo ltrim( $home_sections, "\xEF\xBB\xBF\xFEFF \t\n\r\0\x0B" );
	?>
</main>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var banners = document.getElementById('banners');
		if (!banners) {
			return;
		}

		var slides = Array.prototype.slice.call(banners.querySelectorAll('.item_banner'));
		var dotItems = Array.prototype.slice.call(banners.querySelectorAll('.slick-dots li'));
		var currentIndex = 0;
		var timerId = null;
		var pointerStartX = 0;
		var pointerStartY = 0;
		var isPointerDown = false;
		var isDragging = false;
		var dragThreshold = 40;

		function setSlide(nextIndex) {
			currentIndex = nextIndex;

			slides.forEach(function (slide, index) {
				slide.classList.toggle('is-active', index === currentIndex);
			});

			dotItems.forEach(function (dotItem, index) {
				dotItem.classList.toggle('slick-active', index === currentIndex);
			});
		}

		function startAutoPlay() {
			if (timerId) {
				clearInterval(timerId);
			}

			timerId = setInterval(function () {
				var next = (currentIndex + 1) % slides.length;
				setSlide(next);
			}, 5000);
		}

		function stopAutoPlay() {
			if (timerId) {
				clearInterval(timerId);
				timerId = null;
			}
		}

		function goToNext() {
			setSlide((currentIndex + 1) % slides.length);
		}

		function goToPrev() {
			setSlide((currentIndex - 1 + slides.length) % slides.length);
		}

		function startPointer(clientX, clientY) {
			isPointerDown = true;
			isDragging = false;
			pointerStartX = clientX;
			pointerStartY = clientY;
			banners.classList.add('is-dragging');
			stopAutoPlay();
		}

		function movePointer(clientX, clientY) {
			if (!isPointerDown) {
				return;
			}

			var deltaX = clientX - pointerStartX;
			var deltaY = clientY - pointerStartY;
			if (Math.abs(deltaX) > 8 && Math.abs(deltaX) > Math.abs(deltaY)) {
				isDragging = true;
			}
		}

		function endPointer(clientX) {
			if (!isPointerDown) {
				return;
			}

			var deltaX = clientX - pointerStartX;
			if (isDragging && Math.abs(deltaX) > dragThreshold) {
				if (deltaX < 0) {
					goToNext();
				} else {
					goToPrev();
				}
			}

			isPointerDown = false;
			setTimeout(function () {
				banners.classList.remove('is-dragging');
			}, 0);
			startAutoPlay();
		}

		dotItems.forEach(function (dotItem, index) {
			dotItem.addEventListener('click', function () {
				setSlide(index);
				startAutoPlay();
			});
		});

		banners.addEventListener('mouseenter', function () {
			stopAutoPlay();
		});

		banners.addEventListener('mouseleave', function () {
			startAutoPlay();
		});

		banners.addEventListener('mousedown', function (event) {
			if (event.button !== 0) {
				return;
			}
			if (event.target.closest('.slick-dots')) {
				return;
			}
			event.preventDefault();
			startPointer(event.clientX, event.clientY);
		});

		document.addEventListener('mousemove', function (event) {
			movePointer(event.clientX, event.clientY);
		});

		document.addEventListener('mouseup', function (event) {
			endPointer(event.clientX);
		});

		banners.addEventListener(
			'touchstart',
			function (event) {
				if (event.target.closest('.slick-dots')) {
					return;
				}
				var touch = event.touches[0];
				startPointer(touch.clientX, touch.clientY);
			},
			{ passive: true }
		);

		banners.addEventListener(
			'touchmove',
			function (event) {
				if (!isPointerDown) {
					return;
				}
				var touch = event.touches[0];
				movePointer(touch.clientX, touch.clientY);
			},
			{ passive: true }
		);

		banners.addEventListener(
			'touchend',
			function (event) {
				var touch = event.changedTouches[0];
				endPointer(touch.clientX);
			},
			{ passive: true }
		);

		slides.forEach(function (slide) {
			slide.addEventListener('click', function (event) {
				if (isDragging) {
					event.preventDefault();
				}
			});
		});

		setSlide(0);
		startAutoPlay();

		document.querySelectorAll('.section_block img[data-src]').forEach(function (image) {
			var dataSrc = image.getAttribute('data-src');
			if (!dataSrc) {
				return;
			}

			var currentSrc = image.getAttribute('src') || '';
			if (!currentSrc || currentSrc.indexOf('/images/null_game_image.png') !== -1) {
				image.setAttribute('src', dataSrc);
			}
		});

		function initGameSlider(slider) {
			if (!slider || slider.dataset.sliderInitialized === '1') {
				return;
			}

			var section = slider.closest('.section_block');
			var track = slider.querySelector('.ds-track');
			var prevNav = slider.querySelector('.ds-prev');
			var nextNav = slider.querySelector('.ds-next');
			var headerNavs = section ? section.querySelectorAll('.header .slider_nav') : [];
			var headerPrev = headerNavs[0] || null;
			var headerNext = headerNavs[1] || null;
			var dragging = false;
			var moved = false;
			var startX = 0;
			var startY = 0;
			var startScrollLeft = 0;
			var threshold = 8;

			if (!track) {
				return;
			}

			function getStep() {
				var firstItem = track.querySelector('.ds-item');
				if (!firstItem) {
					return track.clientWidth * 0.85;
				}

				var style = window.getComputedStyle(track);
				var gap = parseFloat(style.columnGap || style.gap || '0');
				return firstItem.getBoundingClientRect().width + gap;
			}

			function setDisabled(el, disabled) {
				if (!el) {
					return;
				}
				el.classList.toggle('disabled', disabled);
				el.setAttribute('aria-disabled', disabled ? 'true' : 'false');
			}

			function updateNavState() {
				var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 1);
				setDisabled(prevNav, track.scrollLeft <= 1);
				setDisabled(headerPrev, track.scrollLeft <= 1);
				setDisabled(nextNav, track.scrollLeft >= maxScroll);
				setDisabled(headerNext, track.scrollLeft >= maxScroll);
			}

			function scrollByStep(direction) {
				track.scrollBy({
					left: direction * getStep(),
					behavior: 'smooth',
				});
				window.setTimeout(updateNavState, 250);
			}

			function startDrag(clientX, clientY) {
				dragging = true;
				moved = false;
				startX = clientX;
				startY = clientY;
				startScrollLeft = track.scrollLeft;
				track.classList.add('scrolling');
			}

			function moveDrag(clientX, clientY) {
				if (!dragging) {
					return;
				}
				var dx = clientX - startX;
				var dy = clientY - startY;

				if (Math.abs(dx) > threshold && Math.abs(dx) > Math.abs(dy)) {
					moved = true;
				}

				if (moved) {
					track.scrollLeft = startScrollLeft - dx;
					updateNavState();
				}
			}

			function stopDrag() {
				if (!dragging) {
					return;
				}
				dragging = false;
				window.setTimeout(function () {
					track.classList.remove('scrolling');
				}, 0);
			}

			[prevNav, headerPrev].forEach(function (button) {
				if (!button) {
					return;
				}
				button.addEventListener('click', function (event) {
					event.preventDefault();
					if (button.classList.contains('disabled')) {
						return;
					}
					scrollByStep(-1);
				});
			});

			[nextNav, headerNext].forEach(function (button) {
				if (!button) {
					return;
				}
				button.addEventListener('click', function (event) {
					event.preventDefault();
					if (button.classList.contains('disabled')) {
						return;
					}
					scrollByStep(1);
				});
			});

			track.addEventListener('mousedown', function (event) {
				if (event.button !== 0) {
					return;
				}
				event.preventDefault();
				startDrag(event.clientX, event.clientY);
			});

			document.addEventListener('mousemove', function (event) {
				moveDrag(event.clientX, event.clientY);
			});

			document.addEventListener('mouseup', function () {
				stopDrag();
			});

			track.addEventListener(
				'touchstart',
				function (event) {
					var touch = event.touches[0];
					startDrag(touch.clientX, touch.clientY);
				},
				{ passive: true }
			);

			track.addEventListener(
				'touchmove',
				function (event) {
					var touch = event.touches[0];
					moveDrag(touch.clientX, touch.clientY);
				},
				{ passive: true }
			);

			track.addEventListener(
				'touchend',
				function () {
					stopDrag();
				},
				{ passive: true }
			);

			track.addEventListener(
				'click',
				function (event) {
					if (moved) {
						event.preventDefault();
						event.stopPropagation();
						moved = false;
					}
				},
				true
			);

			track.addEventListener(
				'scroll',
				function () {
					updateNavState();
				},
				{ passive: true }
			);

			updateNavState();
			slider.dataset.sliderInitialized = '1';
		}

		document.querySelectorAll('.section_block .drag-slider').forEach(function (slider) {
			initGameSlider(slider);
		});
	});
</script>

<?php
get_footer();
