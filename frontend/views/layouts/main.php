<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use backend\models\Contact;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar absolute-navbar">
    <div class="container">
        <a class="navbar__logo" href="<?= Url::to(['site/index']); ?>"><img src="/images/logo.png" alt="Жетысу капитал Логотип" /></a>
        <div class="menu">
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a class="menu__link menu__dropdown" href="#menu__company">Компания <i class="fas fa-caret-down"></i></a>
                    <div id="menu__company" class="menu__dropdown-list">
                        <a class="menu__dropdown-item inner-anchor" href="<?= Url::to(['site/index', '#' => 'mission']); ?>">Миссия</a>
                        <a class="menu__dropdown-item inner-anchor" href="<?= Url::to(['site/index', '#' => 'about-us']); ?>">О компании</a>
                        <a class="menu__dropdown-item inner-anchor" href="<?= Url::to(['site/index', '#' => 'board-of-directors']); ?>">Совет директоров</a>
                        <a class="menu__dropdown-item inner-anchor" href="<?= Url::to(['site/index', '#' => 'management']); ?>">Правление</a>
                    </div>
                </li>
                <li class="menu__list-item">
                    <a class="menu__link menu__dropdown" href="#menu__information">Информация <i class="fas fa-caret-down"></i></a>
                    <div id="menu__information" class="menu__dropdown-list">
                        <a class="menu__dropdown-item" href="<?= Url::to(['information/for-shareholders']); ?>">Для акционеров</a>
                        <a class="menu__dropdown-item" href="<?= Url::to(['information/for-investors']); ?>">Для инвесторов</a>
                    </div>
                </li>
                <li class="menu__list-item">
                    <a class="menu__link menu__dropdown" href="#menu__statement">Финансовые отчеты <i class="fas fa-caret-down"></i></a>
                    <div id="menu__statement" class="menu__dropdown-list">
                        <a class="menu__dropdown-item" href="<?= Url::to(['statement/list']); ?>">Вся отчетность</a>
                        <hr class="menu__dropdown-divider">
                        <a class="menu__dropdown-item" href="#">Годовая финансовая отчетность за 2017 год, с аудиторским отчетом</a>
                    </div>
                </li>
                <li class="menu__list-item"><a class="menu__link" href="<?= Url::to(['site/contact']); ?>">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>

<?= $content ?>

<!-- footer starts -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-column">
                <h5 class="footer-column__h5">Компания</h5>
                <hr class="footer-column__hr">
                <ul class="footer-column__list">
                    <li class="footer-column__list-item"><a class="footer-column__anchor inner-anchor" href="<?= Url::to(['site/index', '#' => 'mission']); ?>">Миссия</a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor inner-anchor" href="<?= Url::to(['site/index', '#' => 'about-us']); ?>">О компании</a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor inner-anchor" href="<?= Url::to(['site/index', '#' => 'board-of-directors']); ?>">Совет директоров</a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor inner-anchor" href="<?= Url::to(['site/index', '#' => 'management']); ?>">Правление</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="footer-column__h5">Информация</h5>
                <hr class="footer-column__hr">
                <ul class="footer-column__list">
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="<?= Url::to(['information/for-shareholders']); ?>">Для акционеров</a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="<?= Url::to(['information/for-investors']); ?>">Для инвесторов</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h5 class="footer-column__h5">Финансовые отчеты</h5>
                <hr class="footer-column__hr">
                <ul class="footer-column__list">
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="<?= Url::to(['statement/list']); ?>">Вся отчетность</a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="#">Годовая финансовая отчетность за 2017 год, с аудиторским отчетом</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-middle">
            <div id="map"></div>
            <div class="footer-column">
                <h5 class="footer-column__h5">Контакты</h5>
                <hr class="footer-column__hr">
                <ul class="footer-column__list">
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="#"><?= Contact::getAddress() ?></a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="#"><?= Contact::getEmail() ?></a></li>
                    <li class="footer-column__list-item"><a class="footer-column__anchor" href="#"><?= Contact::getPhone() ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <span class="footer-bottom__span">© <?= date('Y'); ?> copyright:</span><a class="footer-bottom__anchor" href="/"> <?= Html::encode(Yii::$app->name) ?></a>
    </div>
</footer>
<!--/.Footer-->
<script>
    function initMap() {
        var uluru = {lat: 43.2337499, lng: 76.9550281};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });

        var contactMapDiv = document.getElementById('contact-map');
        if (contactMapDiv !== null) {
            var coor = {lat: 43.2337499, lng: 76.9550281};
            var contactMap = new google.maps.Map(contactMapDiv, {
                zoom: 17,
                center: coor
            });
            var marker = new google.maps.Marker({
                position: coor,
                map: contactMap
            });
        }
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbNu4IZBzSTWX81wc6mrsjpfGwKnf4Fm0&callback=initMap"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
