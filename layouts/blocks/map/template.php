<?php
	$tel = get_field( 'tel_office', 'options' );
	$email = get_field( 'email_office', 'options' );
	$address = get_field( 'address_office', 'options' );
	$map = get_field( 'map', 'options' );
?>

<section class="map">
	<?php get_template_part( '/layouts/partials/title', null, array(
		'class' => 'map__title',
		'title' => get_sub_field( 'title' )
	) ); ?>

	<div class="map__wrapper">
		<div class="map__holder" id="map"></div>

		<div class="container map__container">
			<div class="map__info">
				<div class="map__info-label">Центральный офис компании <span>РЕХАУ</span></div>

				<?php if ( $address ) : ?>
					<div class="map__info-address"><?php echo $address; ?></div>
				<?php endif; ?>

				<?php if ( $tel ) : ?>
					<a href="tel:<?php echo preg_replace( '/[^0-9,+]/', '', $tel ); ?>" class="map__info-tel"><?php echo $tel; ?></a>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<a href="mailto:<?php echo $email; ?>" class="map__info-email"><?php echo $email; ?></a>
				<?php endif; ?>
			</div>

			<div class="main-form main-form--glass map__form">
				<div class="main-form__label">
					Введите<br>
					ваши данные,
					<span>чтобы сделать рассчет</span>
				</div>

				<form method="POST" class="main-form__form" name="Данные">
					<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

					<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

					<button class="btn main-form__submit" type="submit">Отправить</button>

					<div class="main-form__policy">
						Нажимая на кнопку вы подтверждаете условия
						<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
					</div>

					<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

					<?php wp_nonce_field( 'Данные', 'map-form-nonce' ); ?>
				</form>
			</div>
		</div>
	</div>
</section>



<?php if ( $map ) : ?>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function (e) {
			function init(){
				<?php $map = json_decode( $map, true ); ?>
				const map = new ymaps.Map('map', {
					center: [<?php echo $map['center_lat'] ?>,<?php echo $map['center_lng'] ?>],
					zoom: <?php echo $map['zoom']; ?>
				});

				<?php foreach ( $map['marks'] as $mark ) : ?>
					map.geoObjects.add(
						new ymaps.Placemark([<?php echo $mark['coords'][0]; ?>, <?php echo $mark['coords'][1]; ?>], {
								balloonContent: '<?php echo $mark['content']; ?>'
							},
							{
								// iconLayout: 'default#image',
								// iconImageHref: '<?php //echo get_template_directory_uri(); ?>/assets/images/icon-marker.svg',
								iconImageSize: [54, 60],
								iconImageOffset: [-27, -60]
							})
					);
				<?php endforeach; ?>

				map.controls.remove('geolocationControl'); // удаляем геолокацию
				map.controls.remove('searchControl'); // удаляем поиск
				map.controls.remove('trafficControl'); // удаляем контроль трафика
				map.controls.remove('typeSelector'); // удаляем тип
				map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
				// map.controls.remove('zoomControl'); // удаляем контрол зуммирования
				map.controls.remove('rulerControl'); // удаляем контрол правил
				map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)
			}

			ymaps.ready(init);
		});
	</script>
<?php endif; ?>
