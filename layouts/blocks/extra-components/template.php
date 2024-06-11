<section class="extra-components" id="extra-components">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'extra-components__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php if ( get_sub_field( 'text' ) ) : ?>
			<div class="extra-components__text"><?php the_sub_field( 'text' ); ?></div>
		<?php endif; ?>

		<?php
			$components = get_sub_field( 'components' );
			if ( $components ) :
				?>

				<ul class="reset-list extra-components__list">
					<?php foreach ( $components as $component ) : ?>
						<li class="extra-components__item" style="background-image: url('<?php echo $component['img']; ?>');">
							<?php if ( $component['label'] ) : ?>
								<div class="extra-components__item-label"><?php echo $component['label']; ?></div>
							<?php endif; ?>

							<?php if ( $component['text'] ) : ?>
								<div class="extra-components__item-text"><?php echo $component['text']; ?></div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
