<?php

class EvaluationsController extends FormationController{
    
    
    public function __construct() {
        parent::__construct();
    }
     public function indexAction(){
        $this->_titre .= "Evaluations" ;
        include_once 'C:/wamp/www/mathsapp/application/views/index/formation/evaluations/evaluations.php';
    }
}
