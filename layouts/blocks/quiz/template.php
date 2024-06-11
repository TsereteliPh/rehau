<section class="quiz">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'quiz__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$quiz = get_sub_field( 'quiz' );
			if ( $quiz ) :
				?>

				<form method="POST" class="quiz__form swiper" name="Викторина">
					<div class="quiz__pagination"></div>

					<div class="quiz__form-wrapper swiper-wrapper">
						<?php foreach ( $quiz as $item ) : ?>
							<div class="quiz__slide swiper-slide">
								<div class="quiz__slide-wrapper">
									<?php if ( $item['img'] ) : ?>
										<div class="quiz__slide-img"><?php echo wp_get_attachment_image( $item['img'], 'large', false ); ?></div>
									<?php endif; ?>

									<div class="quiz__slide-question"><?php echo $item['question']; ?></div>

									<div class="quiz__slide-options">
										<?php foreach ( $item['options'] as $key => $option ) : ?>
											<label class="radio">
												<input type="radio" class="radio__input" name="<?php echo $item['question']; ?>" value="<?php echo $option['text']; ?>" <?php echo $key == 0 ? 'checked' : ''; ?>/>
												<span class="radio__switcher"></span>
												<span class="radio__text"><?php echo $option['text']; ?></span>
											</label>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<div class="quiz__slide quiz__slide--last swiper-slide">
							<div class="main-form main-form--glass quiz__slide-final">
								<div class="main-form__label">
									Введите<br>
									ваши данные,
									<span>чтобы сделать рассчет</span>
								</div>

								<div class="main-form__form">
									<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

									<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

									<button class="btn main-form__submit js-quiz-submit-trigger" type="button">Отправить</button>

									<div class="main-form__policy">
										Нажимая на кнопку вы подтверждаете условия
										<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
									</div>
								</div>

								<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

								<input type="text" class="hidden js-quiz-input" name="quiz" value="">

								<button class="hidden js-quiz-submit" type="submit"></button>

								<?php wp_nonce_field( 'Викторина', 'quiz-form-nonce' ); ?>
							</div>
						</div>
					</div>

					<div class="quiz__panel">
						<button class="btn quiz__prev" type="button">
							<svg width="42" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-left"></use></svg>
							Назад
						</button>

						<button class="btn quiz__next" type="button">
							Следующий шаг
							<svg width="42" height="16"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#icon-arrow-right"></use></svg>
						</button>
					</div>
				</form>

				<?php
			endif;
		?>
	</div>
</section>
