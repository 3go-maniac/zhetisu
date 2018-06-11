<?php

/* @var $this yii\web\View */

$this->title = 'Для инвесторов';
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
        <h2 class="title "><?= $this->title; ?></h2>
        <table class="financial-statement__table">
            <thead>
            <tr>
                <td></td>
                <td>Наименование</td>
                <td>Дата</td>
                <td>Скачать</td>
            </tr>
            </thead>

            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($docs as $doc): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><a href="#"><?= $doc->title ?></a></td>
                    <td><?= $doc->created_at ?></td>
                    <td><a href="#"><i class="fas fa-download"></i></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>
