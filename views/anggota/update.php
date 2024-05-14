<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */

$this->title = 'Update Anggota: ' . $model->id_anggota;
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anggota, 'url' => ['view', 'id_anggota' => $model->id_anggota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
