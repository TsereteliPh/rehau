<?php
    $welcome = get_field( 'welcome' );
    if ( $welcome ) :
        ?>

        <section class="welcome">
            <div class="container welcome__container">
                <div class="welcome__content">
                    <?php if ( $welcome['title'] ) : ?>
                        <h1 class="title welcome__title">
                            <?php echo $welcome['title']['text']; ?>

                            <span><?php echo $welcome['title']['highlighted']; ?></span>
                        </h1>
                    <?php endif; ?>

                    <?php if ( $welcome['text'] ) : ?>
                        <div class="welcome__text"><?php echo $welcome['text']; ?></div>
                    <?php endif; ?>

                    <?php if ( $welcome['advantages'] ) : ?>
                        <ul class="reset-list welcome__list">
                            <?php foreach ( $welcome['advantages'] as $advantage ) : ?>
                                <li class="welcome__item">
                                    <div class="welcome__item-img"><?php echo wp_get_attachment_image( $advantage['icon'], 'medium', false ); ?></div>

                                    <div class="welcome__item-text"><?php echo $advantage['text']; ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="welcome__callback">
                        <div class="welcome__callback-text">
                            <span>ОКНА REHAU</span>
                            от производителя

                            <?php if ( $welcome['discount'] ) echo 'со скидкой <span>' . $welcome['discount'] . '%</span>'; ?>
                        </div>

                        <button class="btn welcome__callback-btn" type="button">Рассчитать стоимость окон со скидкой</button>
                    </div>
                </div>

                <div class="welcome__form-wrapper">
                    <div class="welcome__form-text">
                        <span>Акция месяца!</span>
                        При заказе в день обращения скидка
                    </div>

                    <form method="POST" class="welcome__form" name="Заявка">
                        <input type="tel" class="input welcome__form-input" name="client_tel" placeholder="Телефон" required>

                        <button class="btn welcome__form-submit" type="submit">Отправить</button>
                    </form>

                    <div class="welcome__form-policy">
                        Согласен с условиями
                        <a href="<?php echo get_privacy_policy_url(); ?>">Политики конфиденциальности данных</a>
                    </div>
                </div>
            </div>
        </section>

        <?php
    endif;
?>
