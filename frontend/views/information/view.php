<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = $doc->title;
?>
<header class="header for-invest">
    <div class="descriptor">
        <div class="container">
            <div class="col-lg-10">
                <!--                <h2>--><?php /* echo $this->title; */ ?><!--</h2>-->
            </div>
        </div>
    </div>
</header>

<section class="for-investors">
    <div class="container">
        <div class="info">
            <div class="info-header">
                <span class="info-date"><?= $doc->created_at ?></span>
                <a class="info-download-btn" href="<?= Url::to(['information/download-file', 'id' => $doc->id]) ?>"><i class="fas fa-download"></i> Скачать</a>
                <h2 class="info-title"><?= $doc->title ?></h2>
            </div>
            <siv class="info-body">
                <?= $doc->text ?>
            </siv>
            <div class="info-footer">

            </div>
        </div>
    </div>
</section>
