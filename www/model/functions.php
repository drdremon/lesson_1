<?php

require_once __DIR__.'/../functions/sql.php';

class News{
    public $id;
    public $pagetitle;
    public $text;

    public static function AllNews(){
        $db = new Base_db('localhost','root','','lesson1');
        $db->connect();
        return $db->select('SELECT * FROM articles','News');
    }
}