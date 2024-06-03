<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
	$tel = get_field( 'tel', 'options' );
	$socials = get_field( 'socials', 'options' );
?>
<header class="header">
	<div class="container header__container">
		<a href="<?php echo bloginfo( 'url' ); ?>" class="header__logo" aria-label="Логотип компании Рехау"></a>

		<?php if ( $socials || $tel ) : ?>
			<div class="header__callback callback">
				<?php if ( $socials ) : ?>
					<div class="callback__socials-wrapper">
						<div class="callback__socials-text">Связаться с нами:</div>

						<div class="callback__socials">
							<?php foreach ( $socials as $social ) : ?>
								<a href="<?php echo $social['link']; ?>" class="callback__socilas-link">
									<svg width="35" height="35"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-<?php echo $social['icon']; ?>"></use></svg>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if ( $tel ) : ?>
					<div class="callback__tel-wrapper">
						<a href="<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="callback__tel"><?php echo $tel; ?></a>

						<div class="callback__tel-text">Бесплатная консультация</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<button class="header__burger" type="button">
			<span></span>
		</button>
	</div>

	<div class="header__drop">
		<?php wp_nav_menu( array(
			'theme_location' => 'menu_main',
			'container' => '',
			'menu_id' => 'menu-main',
			'menu_class' => 'reset-list header__menu'
		) ); ?>
	</div>
</header>

<main class="main">
	<?php if ( is_front_page() ) get_template_part( 'layouts/partials/welcome' ); ?>
