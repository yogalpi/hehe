<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Anggota $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="anggota-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Masukkan Tanggal Lahir'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd'
                    ]
    ]); ?>

    <?= $form->field($model, 'jenis_kelamin')->radioList(['laki-laki' => 'Laki-laki', 'perempuan' => 'Perempuan']) ?>
    
    <?= $form->field($model, 'hobi')->checkBoxList(['baca'=>'Baca', 
                                                    'tulis' => 'Tulis',
                                                    'renang' => 'Renang',
                                                    'ghibah' => 'Ghibah']) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
