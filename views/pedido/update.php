<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pedido */

$this->title = 'Update Pedido: ' . $model->idPedido;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPedido, 'url' => ['view', 'idPedido' => $model->idPedido, 'email' => $model->email, 'idCarrito' => $model->idCarrito, 'idDireccion' => $model->idDireccion, 'idFormapago' => $model->idFormapago, 'idSucursal' => $model->idSucursal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
