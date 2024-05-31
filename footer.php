</main>

<?php
	$advantages = get_field( 'footer_advantages', 'options' );
	$info = get_field( 'footer_info', 'options' );
	$socials = get_field( 'socials', 'options' );
	$tel = get_field( 'tel', 'options' );
?>
<footer class="footer">
	<div class="container">
		<div class="footer__content">
			<a href="<?php echo bloginfo( 'url' ); ?>" class="footer__logo" aria-label="Логотип компании Рехау"></a>

			<?php if ( $advantages ) : ?>
				<div class="footer__advantages">
					<div class="footer__label">Преимущества</div>

					<ul class="reset-list footer__list">
						<?php foreach ( $advantages as $advantage ) : ?>
							<li class="footer__item">
								<?php if ( $advantage['highlighted'] ) : ?>
									<span><?php echo $advantage['highlighted']; ?></span>
								<?php endif; ?>

								<?php echo $advantage['text']; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php if ( $info ) : ?>
				<div class="footer__info">
					<div class="footer__label">Информация</div>

					<div class="footer__rights">Все права защищены <?php echo date( 'Y' ); ?></div>

					<div class="footer__info"><?php echo $info; ?></div>
				</div>
			<?php endif; ?>

			<?php if ( $socials || $tel ) : ?>
				<div class="footer__callback callback">
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
		</div>

		<div class="footer__links">
			<a href="<?php echo get_privacy_policy_url(); ?>">Политика конфиденциальности</a>
		</div>
	</div>
</footer>

<?php get_template_part('layouts/partials/modals'); ?>

<?php wp_footer(); ?>

</body>
</html>
