<?php

require 'functions.php';
require_once 'Database.php';
// require 'router.php';



$db = new Database();
$post = $db->query('select * from posts where id = 2')->fetch(pdo::FETCH_ASSOC);

dd($post['title']);


// dd($posts);
// foreach($posts as $post){
//   echo "<li>$post[title]</li>";
// }



// // 60 second class lesson
// class Person{
//   // a class is a blueprint for anything what it is and what it can do
//   public $name;
//   public $age;

//   public function breath(){
//     // functions in a class are called methods
//     // default visibility for methods are 'public', so we don't have to put it
//     // but its good to be explicit
//     echo $this->name.' is breathing';
//   }
// }

// // like any other blueprint, we create things off of that blueprint (instances)
// $person = new Person();
// // notice that we don't use the '$' when using ->
// $person->name = 'Kevin Ladoblanco';
// $person->age = 47;

// // and we use the -> syntax to access attributes and functions
// $person->breath();
