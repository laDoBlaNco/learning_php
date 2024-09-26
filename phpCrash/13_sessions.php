<?php

/** ---------------------- Sessions -------------------- */
/**
 * NOTE: Sessions are a way to store information (in variables) to be 
 * used across multiple pages. UNLIKE COOKIES, SESSIONS ARE STORED ON
 * THE SERVER. So data in the cookie is on the client and session on the
 * server, so its more secure. So a name vs a user_id for example
 */

 session_start();

 if(isset($_POST['submit'])){


  $username = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);

  // No need to sanitize the password since that's not going to be put
  // into page or anything like that. But we would never store a plain text
  // password to a database, we would hash it
  $password = $_POST['password'];

  if($username=='kevin' && $password=='password'){
    $_SESSION['username'] = $username;
    // we can also redirect through php using the header() function
    header('Location: /learning_php/phpCrash/extras/dashboard.php');
  }else{
    echo 'Incorrect Login';
  }


}


 ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
      </div>
      <input type="submit" value="Submit" name="submit">
    </form>



