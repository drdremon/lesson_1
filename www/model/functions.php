<?php

require_once __DIR__.'/../functions/sql.php';

class News{
    public $id;
    public $pagetitle;
    public $text;

    public static function AllNews(){
        $db = new Base_db('localhost','root','','lesson1');
        $db->connect();
        return $db->queryAll('SELECT * FROM articles','News');
    }

    public static function getOne($id){
        $db = new Base_db('localhost','root','','lesson1');
        $db->connect();
        return $db->queryOne('SELECT * FROM articles WHERE id='.$id,'News');
    }

}