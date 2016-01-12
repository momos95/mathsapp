<?php


class ForumController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function indexAction(){
        include_once 'C:/wamp/www/mathsapp/application/views/index/forum/index.php';
    }
}
