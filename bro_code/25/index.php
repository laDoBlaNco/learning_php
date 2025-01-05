<?php
  $db_server = "localhost";
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'businessdb';
  $conn = '';

  try{
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
  }catch(mysqli_sql_exception){
    echo"Could not connect!<br>";
  }

  // if($conn){
  //   echo"You are connected!<br>";
  // }

  // I just brought the code over to get rid of the errors in vscode

  $sql = 'select * from users';
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo $row['id'],"<br>";
      echo $row['user'],"<br>";
      echo $row['register_date'],"<br>";
    };
  }




  mysqli_close($conn);



