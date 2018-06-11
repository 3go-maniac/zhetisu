<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Жетысу Капитал';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Админ панель Жетысу Капитал.</h2>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Информация - Отчетность:</h2>

                <a class="btn btn-primary" href="<?= Url::to(['info/index']) ?>">Список Информации - Отчетности</a>
                <a class="btn btn-success" href="<?= Url::to(['info/create']) ?>">Добавить Информацию - Отчетность</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Контакты:</h2>

                <a class="btn btn-primary" href="<?= Url::to(['contact/index']) ?>">Контакты</a>
            </div>
        </div>

    </div>
</div>
