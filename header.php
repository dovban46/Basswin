<?php
/**
 * Main site header (BassWin layout).
 *
 * @package twentynineteen-child
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/fonts/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBA.woff2' ); ?>" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="content" class="site-content">

<header>
	<div class="header_desktop container">
		<a class="logo_main" href="#">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/imgi_1_logo.svg' ); ?>" alt="logo">
		</a>
		<div id="menu_header" class="menu_header mscroll">
			<div class="item"><a class="link" href="#"><i class="icon icon-casino"></i><span class="label">GAMES</span></a></div>
			<div class="item"><a class="link" href="#"><i class="icon icon-live"></i><span class="label">Live Casino</span></a></div>
			<div class="item"><a class="link" href="#"><i class="icon icon-sport"></i><span class="label">Sport</span></a></div>
			<div class="item"><a class="link" href="#"><i class="icon icon-cyber"></i><span class="label">Cybersport</span></a></div>
			<div class="item"><a class="link" href="#"><i class="icon icon-promo"></i><span class="label">Promotions</span></a></div>
		</div>
		<div class="panel_user">
			<button type="button" class="button transparent compact" href="#" data-toggle="ajax-modal" data-href="#" data-modal-id="search-modal"><i class="icon icon-search"></i></button>
			<button type="button" class="button primary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Sign up</span></button>
			<button type="button" class="button secondary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Login</span></button>
		</div>
	</div>

	<section class="header_mobile" id="header_mobile">
		<div class="header-top">
			<button class="button transparent compact aside_toggle hamburger" data-toggle="aside" data-aside-id="aside_main">
				<i class="icon icon-menu"></i>
			</button>

			<a class="logo_main" href="#">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/imgi_1_logo.svg' ); ?>" alt="logo">
			</a>

			<div class="panel_user">
				<button type="button" class="button primary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Sign up</span></button>
				<button type="button" class="button secondary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Login</span></button>
			</div>
		</div>
	</section>
</header>

<div id="aside_backdrop" class="aside_backdrop"></div>
<aside id="aside_main" class="aside aside_main">
	<div class="menu_header_list">
		<a class="logo_main" href="#">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/imgi_1_logo.svg' ); ?>" alt="logo">
		</a>
		<div class="close close_aside">
			<i class="icon icon-close"></i>
		</div>
	</div>

	<div class="divider"></div>

	<div class="auth_buttons">
		<button type="button" class="button primary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Sign up</span></button>
		<button type="button" class="button secondary bold" href="#" data-href="#" data-toggle="ajax-modal" data-modal-id="login-modal"><span class="caption">Login</span></button>
	</div>

	<div class="divider"></div>

	<div id="menu_list_user" class="menu_list mscroll">
		<div class="item">
			<a class="link" href="#">
				<div class="block_badge"><i class="icon icon-promo"></i></div>
				<span class="label">Promotions</span>
			</a>
		</div>
	</div>
	<div class="divider"></div>

	<div id="menu_list" class="menu_list mscroll">
		<div class="item"><a class="link" href="#"><i class="icon icon-casino"></i><span class="label">GAMES</span></a></div>
		<div class="item"><a class="link" href="#"><i class="icon icon-live"></i><span class="label">Live Casino</span></a></div>
		<div class="item"><a class="link" href="#"><i class="icon icon-sport"></i><span class="label">Sport</span></a></div>
		<div class="item"><a class="link" href="#"><i class="icon icon-cyber"></i><span class="label">Cybersport</span></a></div>
	</div>
	<div class="divider"></div>

	<div class="menu_list">
		<div class="item"><a class="link" href="#"><i class="icon icon-app"></i><span class="label">App</span></a></div>
	</div>
	<div class="item">
		<a class="link open_support_chat" href="#">
			<i class="icon icon-chat"></i>
			<span class="caption">Support</span>
		</a>
	</div>
</aside>
