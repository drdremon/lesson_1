
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все статьи</title>
</head>
<body>

<h1>Все статьи из базы</h1>

<?php foreach($articles as $article): ?>

    <h2><?php echo $article->pagetitle;?></h2>

<?php endforeach ?>


</body>
</html>