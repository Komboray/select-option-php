<?php


Class Fruits{

    //we are going to create the properties of the class

    public $mango;
    public $pineapple;

    //we need a constructor func that will eat the fruits
    function __construct($mango, $pineapple){
        $this->mango = $mango;
        $this->pineapple = $pineapple;
    }

    //we have created the functions used for the eating

    function eat(){
        echo "You are eating";
    }

    function peal(){
        print_r("You are pealing");
    }
}

$fruit = new Fruits("apple","mango");

$fruit.eat();