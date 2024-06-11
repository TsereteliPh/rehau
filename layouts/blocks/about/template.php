<section class="about" id="about">
	<div class="about__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'about__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="about__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$achievements = get_sub_field( 'achievements' );
			if ( $achievements ) :
				?>

				<ul class="reset-list about__list">
					<?php foreach ( $achievements as $achievement ) : ?>
						<li class="about__item">
							<?php if ( $achievement['number'] ) : ?>
								<div class="about__item-number">
									<?php echo $achievement['number']; ?>

									<?php
										if ( $achievement['unit'] ) {
											echo '<span>' . $achievement['unit'] . '</span>';
										}
									?>
								</div>
							<?php endif; ?>

							<?php if ( $achievement['text'] ) : ?>
								<div class="about__item-text"><?php echo $achievement['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
