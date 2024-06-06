<section class="peculiarities">
	<div class="container peculiarities__container swiper">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'peculiarities__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="peculiarities__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$peculiarities = get_sub_field( 'peculiarities' );
			if ( $peculiarities ) :
				?>

				<ul class="reset-list peculiarities__list swiper-wrapper">
					<?php foreach ( $peculiarities as $peculiarity ) : ?>
						<li class="peculiarities__item swiper-slide">
							<?php if ( $peculiarity['icon'] ) : ?>
								<div class="peculiarities__item-img"><?php echo wp_get_attachment_image( $peculiarity['icon'], 'medium', false ); ?></div>
							<?php endif; ?>

							<?php if ( $peculiarity['label'] ) : ?>
								<div class="peculiarities__item-label"><?php echo $peculiarity['label']; ?></div>
							<?php endif; ?>

							<?php if ( $peculiarity['text'] ) : ?>
								<div class="peculiarities__item-text"><?php echo $peculiarity['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
