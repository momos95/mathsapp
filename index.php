<?php

$param          = explode("/", $_SERVER['REQUEST_URI']) ;
$controller     = isset($param[2]) ? $param[2] : "" ;
$action         = isset($param[3]) ? $param[3] : "" ;
$third_param    = (isset($param[4]) && !empty($param[4]) ) ? $param[4] :  "";
$warning        = (isset($param[5])) && !empty($param[5]) ;

include_once 'C:/wamp/www/mathsapp/application/configs/lesClasses.php';
include_once 'C:/wamp/www/mathsapp/application/configs/lesCheminsurls.php';

$cont = new Controller() ;

if(empty($controller)){
    $cont = new IndexController() ;
    $cont->accueilAction();
}
else if(strcmp($controller,"index") == 0){
    $cont = new IndexController() ;
    
    if(empty($action)){
        $cont->accueilAction();
    }
    else if(strcmp($action, "telechargement") == 0){
        $cont->telechargementAction();
    }
}
else if(strcmp($controller,"profil") == 0){
    $cont = new ProfilController();
    if(empty($action)){
        $cont->indexAction();
    }
    
}

else if(strcmp($controller,"forum") == 0){
    $cont = new ForumController();
    if(empty($action)){
        $cont->indexAction();
    }
}

else if(strcmp($controller,"cours") == 0){
    
    $cont = new CoursController();
    
    if(empty($action)){
        $cont->indexAction();
    }   
}
else if(strcmp($controller,"evaluations") == 0){
    
    $cont = new EvaluationsController();
    
    if(empty($action)){
        $cont->indexAction();
    }
    
    
}
else if(strcmp($controller,"exercices") == 0){
    
    $cont = new ExercicesController();
    
    if(empty($action)){
        $cont->indexAction();
    } 
}

elseif (strcmp($controller,"guest") == 0) {
    $cont = new GuestController();
    $cont->indexAction();
}