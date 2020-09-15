<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoriasModel */

$this->title = 'Update Categorias Model: ' . $model->idCategoria;
$this->params['breadcrumbs'][] = ['label' => 'Categorias Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCategoria, 'url' => ['view', 'id' => $model->idCategoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categorias-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
