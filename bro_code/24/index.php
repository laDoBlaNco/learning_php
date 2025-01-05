<?php

// few things to keep in mind. We are using mysqli, but I'd rather use
// pdo. Also note the different ways to insert. Again this is very
// procedural and basic.
  include 'database.php';

  $username = 'Patrick';
  $password = 'rock3';
  $hash = password_hash($password,PASSWORD_DEFAULT);

  $sql = "insert into users (user,password)
         values ('$username','$hash')";
  
  try{
    mysqli_query($conn,$sql);
    echo"User is now registered";
  }catch(mysqli_sql_exception){
    echo"Could not register this user";
  }
  mysqli_close($conn);

?>
