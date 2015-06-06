<?php

function Sql_connect(){
    mysql_connect('localhost','root','');
    mysql_select_db('lesson1');
}

function Sql_select($sql){
    Sql_connect();

    $res = mysql_query($sql);
    $ret = [];

    while ($row = mysql_fetch_assoc($res)){
        $ret[] = $row;
    }

    return $ret;
}