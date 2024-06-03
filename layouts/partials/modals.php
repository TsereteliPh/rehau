<div class="modal modal--success" id="success">
	<div class="title modal__title">
		Спасибо
		<span>за заявку!</span>
	</div>

	<div class="modal__text">Мы получили вашу заявку и успешно её обработали! Наши специалисты свяжутся с вами в ближайшее время.</div>
</div>

<div class="modal modal--measurements" id="measurements">
	<div class="title modal__title">
		ПРИЕДЕТ ТЕХНОЛОГ НА ЗАМЕР
		<span>БЕСПЛАТНО</span>
	</div>

	<div class="main-form modal__form">
		<div class="main-form__text">И рассчитаем Ваши окна с максимальной скидкой</div>

		<form method="POST" class="main-form__form" name="Замер">
			<input type="text" class="input main-form__input" name="client_name" placeholder="Имя" required>

			<input type="tel" class="input main-form__input" name="client_tel" placeholder="Телефон" required>

			<button class="btn main-form__submit" type="submit">Отправить</button>

			<div class="main-form__policy">
				Нажимая на кнопку вы подтверждаете условия
				<a href="<?php echo get_privacy_policy_url(); ?>">кофиденциальности</a>
			</div>

			<input type="text" class="hidden" name="page_request" value="<?php echo is_archive() ? get_the_archive_title() : get_the_title(); ?>">

			<?php wp_nonce_field( 'Замер', 'modal-measurements-nonce' ); ?>
		</form>
	</div>

	<?php $welcome = get_field( 'welcome' ); ?>

	<div class="modal__discount">
		<?php echo $welcome['discount'] ? $welcome['discount'] : '58'; ?>%
		Скидка
	</div>
</div>
