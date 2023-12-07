<?php

use app\models\Penggunasatker;
use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TimkerjamemberCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timkerjamember-search">

    <?php
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'type' => ActiveForm::TYPE_INLINE,
        'fieldConfig' => ['options' => ['class' => 'form-group mr-2']]
    ]);
    ?>

    <?=
    $form->field($model, 'satkere')->dropDownList(ArrayHelper::map(Penggunasatker::find()->orderBy('id_satker')->all(), 'id_satker', function ($model) {
        return $model->id_satker . ' ' . $model->nama_satker;
    }), ['prompt' => 'Satuan Kerja...'])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-info bundar']) ?>
        <?php echo '&nbsp'?>
        <?php // Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Reset', ['index'], ['class' => 'btn btn-default bundar'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>