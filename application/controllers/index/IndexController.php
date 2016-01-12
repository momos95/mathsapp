<?php

class IndexController extends Controller {
    
    public function __construct() {
        parent::__construct() ;
    }
    public function accueilAction(){
        $this->_titre .= "Accueil ";
        include_once 'C:/wamp/www/mathsapp/application/views/index/accueil.php';
    }
    public function telechargementAction(){
        $this->_titre .= "Téléchargement ";
        include_once 'C:/wamp/www/mathsapp/application/views/index/telechargement.php';
    }
}
