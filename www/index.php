<?php

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl']:'News';
$act = isset($_GET['act']) ? $_GET['act']:'All';

$controllerName = $ctrl. 'Controller';
require_once __DIR__.'/controller/'.$controllerName.'.php';
$controller = new $controllerName;

$method = 'action'. $act;
$controller->$method();