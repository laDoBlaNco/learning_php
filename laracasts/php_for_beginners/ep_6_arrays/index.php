<?php
     /** ----------------- EP 6 Arrays --------------------------- */
     // An array is the programming equivalent of a folder. You put it all in a folder and
     // carry it around.

     // We can now loop over for foreach embedded in php

     // Just a note on the use of {} with interpolation. Its really useful not just as
     // a preference, but when you specifically want to tell PHP to only render that part
     // of the variable and have something else pegado, kinda like the trademark symbol 'TM' 
     // superscript on the word. We could concatenate, or just {} around {$book}TM and it'll
     // come out correctly. Sort of silos the variable.

     // Now since just rendering the loops in the HTML can get messy quickly, there is a 
     // shorthand (which we'll find in the other constructs as well) to embed it directly into
     // the HTML as we've done below

     // We'll mainly see this alternative syntax when working with views or HTML, instead of
     // using the {} we'll use a ':' and then close the php tag to tell php that we are going
     // to put some html here now, but we aren't done with this loop yet

     // So an array is used to create a collection of things. could be numbers, names, usernames,
     // etc. can go in a primitive array.

     // I didn't learn it on this course, but we can also use Array() syntax and there are 
     // pila de functions that go with it as expected like array_push, array_pop, array_shift, etc
     // or syntax to push one at a time like array[] = value;

     $books = [
      "Do Androids Dream of Electric Sheep",
      "The Langoliers",
      "Project Hail Mary",
    ]; 

    $users = [
      "ladoblanco",
      "odalis",
      "xavier",
    ]



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Episode 6: Arrays</title>
</head>
<body>
  <!-- The normal foreach loop in normal PHP tags -->
<h1>Recommended Books 1</h1>
  <ul>
    <?php
      foreach($books as $book){
        echo "<li>$book</li>";
      }
    ?>
  </ul>
<!-- The alternate syntax for embedding PHP directly into the HTML flow -->
  <h1>Recommended Books 2</h1>
  <ul>
    <?php foreach($books as $book):  ?>
      <li><?=$book?>
    <?php endforeach;?>
  </ul>

  <!-- Homework: Create an Array of any 3 usernames - perhaps for a 
   "Top Performing Users" section of your site. Then, create a loop that
   displays each username within a list item.  -->
   <h1>Top Performing Users:</h1>
   <ul>
    <?php foreach($users as $user):?>
      <li><?=$user?></li>
    <?php endforeach;?>
   </ul>
</body>
</html>