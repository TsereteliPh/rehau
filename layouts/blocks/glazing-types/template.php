<section class="glazing-types">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'glazing-types__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$types = get_sub_field( 'types' );
			if ( $types ) :
				?>

				<ul class="reset-list glazing-types__list">
					<?php foreach ( $types as $item ) : ?>
						<li class="glazing-types__item">
							<div class="glazing-types__item-title"><?php echo $item['text']; ?></div>

							<button class="btn glazing-types__item-btn" type="button" data-fancybox data-src="#measurements">Заказать</button>

							<div class="glazing-types__item-img"><?php echo wp_get_attachment_image( $item['img'] ? $item['img'] : 54, 'large', false ); ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
