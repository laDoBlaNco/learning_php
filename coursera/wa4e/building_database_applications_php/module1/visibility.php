<?php

class MyClass{
  public $pub = 'Public';
  protected $pro = 'Protected';
  private $priv = 'Private';

  function print_hello(){
    echo $this->pub.'<br>';
    echo $this->pro.'<br>';
    echo $this->priv.'<br>';
  }
}

$obj = new MyClass();
echo $obj->pub.'<br>';
// echo $obj->pro.'<br>'; // these show up as undefined cuz they are protected
// echo $obj->priv.'<br>'; // and private.

$obj->print_hello(); // they can all run in the method though, we just can't
// access them directly from outside the class.

//  Now the protected can be seen internally in a subclass, but 
// a private cannot

class MyClass2 extends MyClass{
  function print_hello(){
    echo $this->pub.'<br>';
    echo $this->pro.'<br>';
    echo $this->priv.'<br>'; // this can't even be seen here cuz its private to the
    // original parent class
  }
}

echo '--- MyClass2 ---' . '<br>';
$obj2 = new MyClass2();
echo $obj2->pub.'<br>';  // works
$obj2->print_hello();