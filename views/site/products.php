<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use linslin\yii2\curl;
 use yii\helpers\Url;
?>


<div class="containter">

<h1>Товары</h1>

<div class="col-xs-12">

<div class="col-xs-8">
<ul class="list-group">
<?php foreach ($products as $product): ?>
    <li class="list-group-item">
      <a href="<?= Url::toRoute(['site/product', 'id'=>$product->id]);?>">  <?= Html::encode("{$product->title} ({$product->cost})") ?>:
        <?= $product->description ?></a>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>


<div class="col-xs-4">dsdds</div>

</div>
</div>
