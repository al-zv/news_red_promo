<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<br /><br /><br /><br />
<!-- отображение всех новостей. каждая новость содержит: заголовок, картинку, краткое описание, ссылку на источник -->
<?php foreach ($news as $new): ?>
    <div class="container">
    <h1> <a href="?r=news%2Fshow-new&id=<?= Html::encode("{$new->id}") ?>"> <?= Html::encode("{$new->heading}") ?> </a> </h1>
            <img src="../web/img/<?= Html::encode("{$new->image}") ?>" alt="<?= Html::encode("{$new->image}") ?>" width = "15%" >
            <p> <?= Html::encode("{$new->short_description}") ?> </p>
            Источник: <a href="<?= Html::encode("{$new->link}") ?>"><?= Html::encode("{$new->link}") ?></a>
            <hr>
        </div>
    </div>
<?php endforeach; ?>
<div class="container">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>