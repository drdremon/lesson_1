<?php

abstract class AbstractModel {

    protected static $table;
    protected static $class;

    public static function AllNews(){
        $db = new Base_db('localhost','root','','lesson1');
        $db->connect();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->queryAll($sql, static::$class);
    }

    public static function getOne($id){
        $db = new Base_db('localhost','root','','lesson1');
        $db->connect();
        $sql='SELECT * FROM articles WHERE id='.$id;
        return $db->queryOne($sql,static::$class);
    }
} 