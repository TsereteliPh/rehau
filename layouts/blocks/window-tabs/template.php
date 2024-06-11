<section class="window-tabs" id="window-tabs">
	<div class="container">
		<?php get_template_part( '/layouts/partials/title', null, array(
			'class' => 'window-tabs__title',
			'title' => get_sub_field( 'title' )
		) ); ?>

		<?php
			$tabs = get_sub_field( 'tabs' );
			if ( $tabs ) :
				?>

				<div class="window-tabs__box">
					<ul class="reset-list window-tabs__tabs-list js-tabs">
						<?php foreach ( $tabs as $key => $tab ) : ?>
							<li class="window-tabs__tab-item<?php echo $key == 0 ? ' active' : ''; ?>" data-tab="window-tabs-<?php echo $args['block_id'] . '-' . $key; ?>">
								<?php echo $tab['label']; ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<?php foreach ( $tabs as $key => $tab ) : ?>
						<div class="window-tabs__tab<?php echo $key == 0 ? ' active' : ''; ?>" id="window-tabs-<?php echo $args['block_id'] . '-' . $key; ?>">
							<div class="window-tabs__tab-content">
								<div class="window-tabs__tab-img"><?php echo wp_get_attachment_image( $tab['img'] ? $tab['img'] : 54, 'large', false ); ?></div>

								<div class="window-tabs__tab-info">
									<?php if ( $tab['characteristics'] ) : ?>
										<ul class="reset-list st-ul window-tabs__tab-characteristics">
											<?php foreach ( $tab['characteristics'] as $characteristic ) : ?>
												<li class="window-tabs__tab-characteristic"><?php echo $characteristic['text']; ?></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ( $tab['price'] ) : ?>
										<div class="window-tabs__tab-price">
											Цена: от
											<span><?php echo $tab['price']; ?></span>
											руб.
										</div>
									<?php endif; ?>
								</div>
							</div>

							<div class="window-tabs__tab-btns">
								<button class="btn window-tabs__tab-order" type="button" data-fancybox data-src="#measurements">Заказать окно</button>

								<button class="btn window-tabs__tab-measurement" type="button" data-fancybox data-src="#measurements">Вызвать мастера на замер БЕСПЛАТНО</button>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?php
			endif;
		?>
	</div>
</section>
