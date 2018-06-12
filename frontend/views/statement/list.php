<?php

use yii\helpers\Url;

$this->title = '';
?>

<header class="header fin-state">
    <div class="descriptor">
        <div class="container">
            <div class="col-lg-10">
<!--                <h2>Финансовая отчетность</h2>-->
            </div>
        </div>
    </div>
</header>

<section class="financial-statement">
    <div class="container">
        <h2 class="title">Финансовая отчетность:</h2>
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
                    <td><a href="<?= Url::to(['information/view', 'id' => $doc->id]) ?>"><?= $doc->title ?></a></td>
                    <td><?= $doc->created_at ?></td>
                    <td><a href="<?= Url::to(['information/download-file', 'id' => $doc->id]) ?>"><i class="fas fa-download"></i></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</section>