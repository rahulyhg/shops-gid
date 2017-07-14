<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->params['adminEmail'];;
?>
<div class="row">
    <div class="col-md-8">
        <?= $this->render('_posts', [
            'posts' => $posts,
        ]); ?>
    </div>
    <?= $this->render('_sidebar', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]); ?>
</div>