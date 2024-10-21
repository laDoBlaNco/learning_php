<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WA4E - Forms3</title>
</head>
<body>
  <p>Guessing game...</p>
  <!-- POST example: post is different in that you tell the form that 
   method="post" and the same k=>v data pairs will be sent through a post
   method to the server and not through the url -->
  <form method="post">
    <p><label for="guess">Input Guess</label>
      <input type="text" name="guess" size="40" id="guess">
    </p>
    <input type="submit">
  </form>

  <pre>
    $_POST:
    <?php
      print_r($_POST);
    ?>

    $_GET:
    <?php
      print_r($_GET);
    ?>
  </pre>
</body>
</html>