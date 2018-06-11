<?php

use backend\models\Contact;

/* @var $this yii\web\View */

$this->title = 'Контакты';
?>
<header class="header contact-header">
    <div class="descriptor">
        <div class="container">
            <div class="col-lg-10">
                <!--                <h2>--><?php /* echo $this->title; */ ?><!--</h2>-->
            </div>
        </div>
    </div>
</header>

<section class="contact">
    <div class="container">
        <h2 class="title"><?= $this->title; ?></h2>

        <div class="contact__block">

            <div id="contact-map" class="contact__map">

            </div>

            <div class="contact__info">
                <h3 class="contact__heading"><i class="fas fa-phone-square contact__info-icon"></i> Телефон:</h3>
                <a href="#" class="contact__link"><?= Contact::getPhone() ?></a>

                <h3 class="contact__heading"><i class="fas fa-envelope contact__info-icon"></i> Email:</h3>
                <a href="#" class="contact__link"><?= Contact::getEmail() ?></a>

                <h3 class="contact__heading"><i class="fas fa-map-marker contact__info-icon"></i> Адрес:</h3>
                <a href="#" class="contact__link"><?= Contact::getAddress() ?></a>
            </div>

        </div>

        <h2 class="contact__title">Форма обратной связи</h2>

        <div class="feedback">
            <form class="feedback__form" action="">
                <div class="feedback__form-block">
                    <label class="feedback__label" for="feedback-name">Имя:</label>
                    <input id="feedback-name" class="feedback__text-input" name="feedback-name" type="text" placeholder="Введите ваше имя">
                </div>
                <div class="feedback__form-block">
                    <label class="feedback__label" for="feedback-email">Email:</label>
                    <input id="feedback-email" class="feedback__text-input"  name="email" type="text" placeholder="Введите email">
                </div>
                <div class="feedback__form-block">
                    <label class="feedback__label" for="feedback-message">Сообщение:</label>
                    <textarea id="feedback-message" class="feedback__textarea" name="message" rows="5" placeholder="Ваше сообщение"></textarea>
                </div>
                <button class="feedback__button" type="submit">Отправить</button>
            </form>
        </div>

    </div>
</section>

<script>

</script>