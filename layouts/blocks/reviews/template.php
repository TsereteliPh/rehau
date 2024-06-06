<section class="reviews">
	<div class="container--small">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'reviews__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="reviews__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$reviews = get_sub_field( 'reviews' );
			if ( $reviews ) :
				?>

				<div class="reviews__wrapper">
					<div class="reviews__slider swiper">
						<ul class="reset-list reviews__list swiper-wrapper">
							<?php foreach ( $reviews as $review ) : ?>
								<li class="reviews__item swiper-slide">
									<?php if ( $review['gallery'] ) : ?>
										<div class="reviews__item-gallery">
											<?php foreach ( $review['gallery'] as $key => $photo ) : ?>
												<a href="<?php echo $photo['url']; ?>" class="reviews__item-link<?php echo $key > 2 ? ' hidden' : ''; ?>" data-fancybox="review-gallery" data-caption="<?php echo esc_html( $review['text'] ); ?>">
													<?php echo wp_get_attachment_image( $photo['id'], 'medium', false ); ?>
												</a>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

									<div class="reviews__item-info">
										<div class="reviews__item-user">
											<?php
												if ( $review['profile'] ) {
													echo wp_get_attachment_image( $review['profile'], 'thumbnail', false, array(
														'class' => 'reviews__item-profile'
													) );
												}
											?>

											<div class="reviews__item-name"><?php echo $review['name']; ?></div>
										</div>

										<?php if ( $review['text'] ) : ?>
											<div class="reviews__item-text"><?php echo $review['text']; ?></div>
										<?php endif; ?>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="reviews__controls">
						<div class="reviews__prev">V</div>
						<div class="reviews__next">V</div>
					</div>

					<div class="reviews__pagination"></div>
				</div>

				<?php
			endif;
		?>
	</div>
</section>
