<?php
    /** ---------------- EP 5 Conditionals and Booleans ---------------------- */
    // Conditionals are simple questions to create branches in our code

    // There is a shortcut for display a var on the page, instead of the php tags <?php
    // we can use <?=, and according to Jeffrey most people will use this if they are able
    // so I'll see it a lot in the wild.

    // also when closing php the semicolon is optional at the end
   
    $name = "Dark Matter";
    $read = true; // boolean true or false

    if($read){
      $message = "You have read $name";
    }else{
      $message = "You have NOT read $name";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Episode 5: Conditionals and Booleans</title>
</head>
<body>
  <h1><?= $message  ?></h1>
  <!-- The Homeworkd for episode 5 -->
  <p><?= 'Hello PHP World!'?></p>
</body>
</html>