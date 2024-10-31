<?php

class Hello{
  protected $lang; // this means its only accessible in the class
  function __construct($lang){
    $this->lang = $lang; // as normal we use the arg to set our protected var
  }
  function greet(){
    if($this->lang == 'fr') return 'Bonjour';
    if($this->lang == 'es') return 'Hola';
  }
}

$hi = new Hello('es');
echo $hi->greet() . '<br>';