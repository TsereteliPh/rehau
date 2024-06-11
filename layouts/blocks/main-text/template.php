<section class="main-text">
	<div class="container--small">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'main-text__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<div class="main-text__text"><?php the_sub_field( 'text' ); ?></div>
	</div>
</section>
