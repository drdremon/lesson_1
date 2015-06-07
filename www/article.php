<?php
require __DIR__ . '/model/News.php';

if (isset($_GET)) {
    $id = $_GET['id'];
} else {
    echo 'Не передан ID статьи';
    die;
}

$articles = Sql_select('SELECT * FROM articles WHERE id='.$id);

include __DIR__.'/views/index.php';