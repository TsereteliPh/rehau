<section class="form-measurer">
	<div class="container--small form-measurer__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'form-measurer__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<div class="form-measurer__content">
			<div class="main-form form-measurer__form">
				<?php if ( get_sub_field( 'text' ) ) : ?>
					<div class="main-form__text"><?php the_sub_field( 'text' ); ?></div>
				<?php endif; ?>

				<form method="POST" class="main-form__form" name="Замерщик">
					<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

					<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

					<button class="btn main-form__submit" type="submit">ВЫЗВАТЬ ЗАМЕРЩИКА</button>

					<div class="main-form__policy">
						Нажимая на кнопку вы подтверждаете условия
						<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
					</div>

					<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

					<?php wp_nonce_field( 'Замерщик', 'form-measurer-nonce' ); ?>
				</form>
			</div>

			<?php
				$tel = get_field( 'tel', 'options' );
				$socials = get_field( 'socials', 'options' );

				if ( $tel || $socials ) :
					?>

					<div class="form-measurer__contacts">
						<div class="form-measurer__contacts-text">Так же можете написать в мессенджеры или позвонить по телефону</div>

						<div class="form-measurer__contacts-callback callback">
							<?php if ( $socials ) : ?>
								<div class="callback__socials-wrapper">
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
					</div>

					<?php
				endif;
			?>
		</div>
	</div>
</section>
