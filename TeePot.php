<?php

// Create a class
class TeaPot {
    // variables -> Data -> nouns
    public $color = 'RED';
    public $content = 1;
    
    // Actions -> methods -> verbs
    public function getInfo(){

        echo $this->color . ' ' . $this->content;   
    }
}

$teapot = new TeaPot(); // create an object
$teapot->getInfo(); // call the method getInfo()






?>