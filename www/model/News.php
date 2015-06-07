<?php



class News extends AbstractModel{
    public $id;
    public $pagetitle;
    public $text;

    protected static $table = 'articles';
    protected static $class = 'News';

}