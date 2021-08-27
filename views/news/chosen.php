<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<!-- перебираем массив и оставляем в нем только избранные новости -->
<?php foreach ($news as $new)
    if ($new->chosen == 1) {
        $news_chosen[] = $new;
    }
?>
<br /><br /><br /><br />
<!-- отображение избранных новостей. каждая новость содержит: заголовок, картинку, краткое описание -->
<?php foreach ($news_chosen as $new): ?>
    <div class="container">
    <h1> <a href="?r=news%2Fshow-new&id=<?= Html::encode("{$new->id}") ?>"> <?= Html::encode("{$new->heading}") ?> </a> </h1>
            <img src="../web/img/<?= Html::encode("{$new->image}") ?>" alt="<?= Html::encode("{$new->image}") ?>" width = "15%" >
            <p> <?= Html::encode("{$new->short_description}") ?> </p>
            <hr>
        </div>
    </div>
<?php endforeach; ?>
