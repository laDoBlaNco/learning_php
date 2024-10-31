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

// so now let's subclass it
class Social extends Hello{
  function bye(){
    if($this->lang == 'fr') return 'Au Revoir!';
    if($this->lang == 'es') return 'Adios!';
    return 'goodbye';
  }
}

$hi = new Social('es');
echo $hi->greet() . '<br>';
echo $hi->bye().'<br>';