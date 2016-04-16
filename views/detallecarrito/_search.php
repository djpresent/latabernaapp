<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallecarritoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecarrito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codProducto') ?>

    <?= $form->field($model, 'precio') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'subtotal') ?>

    <?= $form->field($model, 'idCarrito') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
