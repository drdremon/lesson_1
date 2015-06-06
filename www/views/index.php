
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Все статьи</title>
</head>
<body>

<h1>Все статьи из базы</h1>

<?php foreach($articles as $article): ?>

    <h2><? echo $article['pagetitle']?></h2>
    <article><? echo $article['text']?></article>
    <a href="/www/article.php?id=<?php echo $article['id'] ?>">Читать весь текст статьи</a>
<?php endforeach ?>


</body>
</html>