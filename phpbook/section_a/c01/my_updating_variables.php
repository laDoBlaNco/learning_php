<?php
/**
 * Try to change the value of the $name variable to hold your name
 * 
 * Try to add a new line after Step 2 and the $name variable  to 
 * another name to see a new name.
 */

 $name = 'Kevin';
 $name = 'L@D0Bl@Nc0';
 $name = 'Odalis'; // the different name to show on the page.
 $price = 5;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Candy Store</h1>
  <h2>Welcome <?php echo $name  ?></h2>
  <p>The cost of your candy is $<?php echo $price  ?> per pack.</p>
</body>
</html>