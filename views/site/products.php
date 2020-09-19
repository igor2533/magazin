<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Товары</h1>
<ul>
<?php foreach ($products as $product): ?>
    <li>
        <?= Html::encode("{$product->title} ({$product->cost})") ?>:
        <?= $product->description ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
