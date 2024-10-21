<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WA4E - Forms2</title>
</head>
<body>
  <p>Guessing game...</p>
  <form>
    <!-- a GET example: default forms use GET to transfer k=>v data through
     the url (you can also explicitly say method="get"-->
    <p><label for="guess">Input Guess</label>
      <input type="text" name="guess" id="guess">
    </p>
    <input type="submit">
  </form>

  <pre>
    $_GET:
    <?php
      print_r($_GET);
    ?>
  </pre>
</body>
</html>