<?php

class ProfilController extends Controller{
    
    public function __construct() {
        parent::__construct();
        $this->_titre .= "Profil " ;
    }
    
    public function indexAction(){
        include_once 'C:/wamp/www/mathsapp/application/views/index/profil.php';
    }
}
