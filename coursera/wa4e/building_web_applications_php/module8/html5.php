<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WA4E Forms - HTML5 Inputs</title>
</head>
<body>
  <form method="post" action="html5.php">
  Select your favorite color:
  <input type="color" name="favcolor" value="#0000ff"><br>
  Birthday:
  <input type="date" name="bday" value="1976-12-25"><br>
  E-mail:
  <input type="email" name="email"><br>
  Quantity (between 1 and 25):
  <input type="number" name="quantity" min="1" max="25"><br>
  Add your homepage:
  <input type="url" name="homepage"><br>
  Transportation:
  <!-- if it doesn't know what you are talking about, the default if text input -->
  <input type="flying" name="saucer"><br>

  <input type="submit">
</form>

  <pre>
    $_POST:
    <?php
      print_r($_POST);
    ?>
  </pre>
</body>
</html>