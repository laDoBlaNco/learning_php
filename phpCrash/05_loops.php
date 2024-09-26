<?php

  /** ------------------------ For Loop ------------------------- */
  /**
   * For Loop Syntax:
   * for(initalize var; condition; increment){
   *    // code to be executed.
   * }
   */
  // for($x=1;$x<=10;$x++) echo 'Number: ',$x,'<br>';   // Note that one liners don't need {}


  /**
   * While Loop:
   * while (condition){
   *  // code to be executed. 
   *  // Must have an increment or decrement or some way to break out of loop
   * }
   */
  // $x=1;
  // while($x<=15){
  //   echo 'Number:  ',$x,'<br>';
  //   $x++;
  // }

  /**
   * Do..While loop will always execute the block of code at min once.
   * even if the condition is false 
   * We actually don't use this much.
   */

  //  $x = 6;
  //  do{
  //   echo 'Number: ',$x ,'<br>';
  //  }while($x<=5);

  /**
   * Foreach Loop Syntax: (this is one we use a lot in php as we work with
   * arrays constantly)
   * foreach($array as $value){
   *  // code to execute;
   * }
   * 
   * foreach($array as $index=>$value){  // using $array as an associative array
   *  // code to execute;
   * }
   */

  $posts = ['first post','second post','third post'];
  // for($x=0;$x<count($posts);$x++){
  //   echo $posts[$x],'<br>';    
  // }

  foreach($posts as $post){
    echo $post,'<br>';
  }
  foreach($posts as $index=>$post){
    echo $index+1,' - ',$post,'<br>';
  }

  // With an actual associative array
  $person = [
    'first_name'=>'Kevin',
    'last_name'=>'Whiteside',
    'email'=>'whitesidekevin@gmail.com',
  ];
  foreach($person as $key=>$value){
    echo "$key - $value<br>";
  }
  