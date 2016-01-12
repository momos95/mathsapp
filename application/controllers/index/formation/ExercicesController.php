<?php

class ExercicesController extends FormationController{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function indexAction(){
        $this->_titre .= "Exercices" ;
        include_once 'C:/wamp/www/mathsapp/application/views/index/formation/exercices/exercices.php';
    }
}
