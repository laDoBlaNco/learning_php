<?php

/** --------------------------- Object Oriented Programming ------------------------ */
/**
 * From php5 onwards you can write php in either a procedural or objected oriented
 * way. OOP consists of classes that can hold "properties" and "methods". Objects can
 * be created from classes. Up until now we've been doing procedural. 
 */

 class User{
  // Properties are attributes that belong to a class

  // Access Modifiers public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // A construtor is a method that runs when an object is created
  public function __construct($name,$email,$password){
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
  }

  // Method is a function that belongs to class
  // NOTE the lack of '$' inside the methods??? That must come from how I set them without $
  function set_name($name){
    $this->name=$name;
  }

  function get_name(){
    return $this->name;
  }
 }

 // Instantiate a user object
 $user1 = new User('Kevin','whitesidekevin@gmail.com','baby');
 $user2 = new User('Odalis','odalislorenzo74@gmail.com','girl');

 $user1->set_name('Kevin');
 $user2->set_name('Odalis');

//  $user1->name = 'Kevin';

//  var_dump($user1);echo '<br>';
//  var_dump($user2);echo '<br>';
//  echo $user1->name,'<br>';

// echo $user2->get_name(),'<br>';
echo $user1->email,'<br>';
echo $user2->name,'<br>';

// Inheritance
class Employee extends User{

  // NOTE: Maybe just in php 8 and not in Brad's tut, but I need to create $title before
  // I can use it below.
  public $title; // IN BRAD'S CODE IT WORKED WITHOUT THIS. 

  public function __construct($name,$email,$password,$title){
    parent::__construct($name,$email,$password);
    $this->title=$title;
  }

  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Kelen','whitesidekelen@gmail.com','curly','Supervisor');

echo $employee1->get_title(),'<br>';




