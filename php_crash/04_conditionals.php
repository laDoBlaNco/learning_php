<?php

  /**------------------ Operators ---------------------- */

  /**
   * < less than
   * > greater than
   * <= less than or equal to
   * >= greater than or equal to
   * == equal to
   * === identical to (checks both value and type)
   * != not equal to
   * !=== not identical to
   */

   /** --------------- If Statements ------------------- */
  /**
   * If Statement Syntax:
   * if(condition){
   *  // code to run if condition is true;
   * }
   * 
   */

  //  $age = 17;
  //  if($age>=18){
  //    echo 'Your are old enough to vote';
  //  }else{
  //   echo 'Sorry you are not old enought to vote';
  //  }

  $t = date('H'); // php date function has different args depending on what you want.
  // we can see those args here in vscode over or checking the php docs

  // if($t<12){
  //   echo 'Good morning!';
  // }elseif($t<17){
  //   echo 'Good afternoon';
  // }else{
  //   echo 'Good evening!';
  // };

  $posts = [];

  // if(!empty($posts)){ // 'empty()' returns a bool if empty or not and '!' negates as normal
  //   echo $posts[0];
  // }else{
  //   echo 'No Posts';
  // }

  // with ternary operator, just like JS
  // echo !empty($posts)?$posts[0]:'No posts';

  // if we are just setting a var, same thing
  // $first_post = !empty($posts)?$posts[0]:'No posts';
  $first_post = !empty($posts)?$posts[0]:null;  // you may not always have an else with ternary

  // or we can use the null coallescing
  $first_post = $posts[0]??null; // no need for '!empty'
  // echo $first_post;

  // Switch is pretty much as expected
  $favcolor = 'orange';
  $favcolor = 'blue';

  switch($favcolor){
    case  'red':
      echo 'Your favorite color is red';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    case 'green':
      echo 'Your favorite color is green';
    default:
      echo 'Your favorite color is not red, blue, or green';

  };

  // Brad didn't say anything about matching syntax with kinda replaces the switch
  // statement in some cases. 




  
   




