<?php


namespace ishop\base;


use ishop\Db;

class Model
{
    public $attributes = [];
    public $errors = [];
    public $rulse = [];

    public function __construct(){
        Db::instance();
    }
}