<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Info */

$this->title = 'Создать Информацию - Отчетность';
$this->params['breadcrumbs'][] = ['label' => 'Информация - Отчетность', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
