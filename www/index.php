<?php

require __DIR__.'/model/functions.php';

$articles= News::AllNews();

include __DIR__.'/views/index.php';
