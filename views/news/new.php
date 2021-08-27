<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<br /><br /><br /><br />
<!-- отображение одной новости. каждая новость содержит: заголовок, картинку, описание, ссылку на истоник -->
<h1> <?= Html::encode("{$new->heading}") ?> </h1>
<img src="../web/img/<?= Html::encode("{$new->image}") ?>" alt="oriflame_leakage_news">
<p> <?= Html::encode("{$new->text}") ?> </p>
Источник: <a href="<?= Html::encode("{$new->link}") ?>"><?= Html::encode("{$new->link}") ?></a>