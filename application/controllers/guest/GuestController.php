<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GuestController
 *
 * @author mse
 */
class GuestController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function indexAction(){
        $this->_titre .= "Présentation" ;
        include_once 'C:/wamp/www/mathsapp/application/views/guest/index.php';
    }
}
