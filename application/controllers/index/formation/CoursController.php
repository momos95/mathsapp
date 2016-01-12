<?php

class CoursController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function indexAction(){
        $this->_titre .= "Cours ";
        include_once 'C:/wamp/www/mathsapp/application/views/index/formation/cours/cours.php';
    }
}
