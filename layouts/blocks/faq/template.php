<section class="faq" id="faq">
	<div class="container--small faq__container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'faq__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$faq = get_sub_field( 'faq' );
			if ( $faq ) :
				?>

				<ul class="reset-list faq__list js-accordion">
					<?php foreach ( $faq as $item ) : ?>
						<li class="faq__item">
							<button class="faq__item-button">
								<span class="faq__item-icon">+</span>

								<div class="faq__item-label"><?php echo $item['question']; ?></div>
							</button>

							<div class="faq__item-answer"><?php echo $item['answer']; ?></div>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php
			endif;
		?>
	</div>
</section>
