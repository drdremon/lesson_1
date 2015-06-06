<?php

require __DIR__.'/model/functions.php';

$articles = Sql_select('SELECT * FROM articles');

include __DIR__.'/views/index.php';