<?php

require_once __DIR__. '/../model/functions.php';

class NewsController{

    public function actionAll(){
        $articles= News::AllNews();
        include __DIR__.'/../views/index.php';
    }

    public function actionOne(){
        $id= $_GET['id'];
        $item=News::getOne($id);
        include __DIR__.'/../views/one.php';
    }


}