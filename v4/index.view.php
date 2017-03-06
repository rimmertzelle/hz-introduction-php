<!doctype html>
<html lang="EN">
    <head>
        <meta charset="utf-8" />
        <title>Learning Path</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/learningpath.css">
    </head>
    <body>
        <div class="container">
        <h1>Learning Path</h1>
            <div class="videos">
                <?php foreach($videos  as  $video) : ?>
                    <div class="video">
                        <h2><?= ucwords($video->title); ?></h2>
                        <iframe width="560" height="315" src=<?= $video->url; ?> frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php endforeach;  ?>
            </div>
        </div>
</body>
</html>

<!-- using video object -->
<?php //foreach($videos  as  $video) : ?>
<!--    <div class="video">-->
<!--        <h2>--><?//= ucwords($video->getTitle()); ?><!--</h2>-->
<!--        <iframe width="560" height="315" src=--><?//= $video->getUrl(); ?><!-- frameborder="0" allowfullscreen></iframe>-->
<!--    </div>-->
<?php //endforeach;  ?>


