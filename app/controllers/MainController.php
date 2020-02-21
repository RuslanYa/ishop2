<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{
    public function __construct($route)
    {
        parent::__construct($route);
//        debug($route);
    }

//    public $layout = 'test';

    public function indexAction(){

        $posts = \R::findAll('test');
        $post = \R::findOne('test','id = ?',[2]);
//        var_dump($posts);
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');

        }
}