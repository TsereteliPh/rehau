<section class="advantages">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'advantages__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="advantages__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<ul class="reset-list advantages__list">
					<?php foreach ( $advantages as $advantage ) : ?>
						<li class="advantages__item">
							<div class="advantages__item-label"><?php echo $advantage['label']; ?></div>

							<div class="advantages__item-text"><?php echo $advantage['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
