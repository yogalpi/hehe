<?php

use app\models\Anggota;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AnggotaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Anggotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_anggota',
            'nama',
            'tanggal_lahir',
            'jenis_kelamin',
            'hobi',
            //'alamat:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Anggota $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_anggota' => $model->id_anggota]);
                 }
            ],
        ],
    ]); ?>


</div>
