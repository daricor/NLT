<?php

class DB {
    
    private static $bdd ;
    
    
    function __construct() {
        $this->bdd = new PDO('mysql:host=localhost;dbname=newsletter;charset=utf8', 'root', '');
    }

    
    
    
    
    
}