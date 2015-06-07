<?php

class Base_db{
    public $host_name;
    public $base_login;
    public $base_password;
    public $base_db;

    public function __construct($host,$login,$pass,$db){
        $this->host_name = $host;
        $this->base_login = $login;
        $this->base_password = $pass;
        $this->base_db = $db;
    }

    public function connect(){
        mysql_connect($this->host_name,$this->base_login,$this->base_password);
        mysql_select_db($this->base_db);
    }

    public function queryAll($sql, $object='stdClass'){
        $this->connect();
        $res = mysql_query($sql);
        $ret = [];

        while ($row = mysql_fetch_object($res, $object)){
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class='stdClass'){
        return $this->queryAll($sql, $class)[0];
    }
}

