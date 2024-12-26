<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Checkboxes Explained</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
    <input type="checkbox" name="hamburger" id="Hamburger">Hamburger <br>
    <input type="checkbox" name="hotdog" id="Hot Dog"> Hot Dog<br>
    <input type="checkbox" name="taco" id="Taco"> Taco<br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])){
    if(isset($_POST['pizza'])){
      echo"You like pizza!<br>";
    }
    if(isset($_POST['hamburger'])){
      echo"You like hamburgers!<br>";
    }
    if(isset($_POST['hotdog'])){
      echo"You like hot dogs!<br>";
    }
    if(isset($_POST['taco'])){
      echo"You like tacos!<br>";
    }
    if(empty($_POST['pizza'])){
      echo" You don't like pizza!<br>";
    }
    if(empty($_POST['hamburger'])){
      echo" You don't like hamburgers!<br>";
    }
    if(empty($_POST['hotdog'])){
      echo" You don't like hot dogs!<br>";
    }
    if(empty($_POST['taco'])){
      echo" You don't like tacos!<br>";
    }
  }

?>