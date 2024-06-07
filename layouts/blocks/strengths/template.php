<section class="strengths">
	<div class="container--small strengths__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'strengths__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$advantages = get_sub_field( 'advantages' );
			if ( $advantages ) :
				?>

				<ul class="reset-list strengths__list">
					<?php foreach ( $advantages as $advantage ) : ?>
						<li class="strengths__item">
							<div class="strengths__item-label"><?php echo $advantage['label']; ?></div>

							<div class="strengths__item-text"><?php echo $advantage['text']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
