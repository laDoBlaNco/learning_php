<!-- 
  MODEL-VIEW-CONTROLLER
  A model that defines the elements of a web application and how they interact. So
  this could be the business logic or programming piece of our app.

  View - Produces output, its the view, its what people see on the page

  Model - Handles the data, its the data validation and business logic

  Controller - Orchestration / Routing - its the part that makes the decisions
  on when and what to do with the model and the new views

-->

<?php
  $oldguess = '';
  $message = false;
  if(isset($_POST['guess'])){
    // trick for integer / numeric parameters
    $oldguess = $_POST['guess'] + 0;
    if($oldguess == 42){
      $message = "Great Job!";
    }else if($oldguess < 42){
      $message = "Too Low";
    }else{
      $message = "Too high...";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>(MVC) Guessing Game for Kevin Whiteside</title>
</head>
<body style="font-family:sans-serif;">
  <p>Guessing game...</p>
  <?php
    if($message !== false){
      echo "<p>$message</p>\n";
    }
  ?>

  <form method="post">
    <p><label for="guess">Input Guess:</label>
    <input type="text" name="guess" id="guess" size="40"
      value="<?= htmlentities('&') ?>"/></p>
    <input type="submit"/>
  </form>
</body>
</html>