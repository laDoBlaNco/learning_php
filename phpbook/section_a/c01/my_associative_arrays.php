<?php
/**
 * Try to change the values of the array giving them the following:
 *  - fat a value of 42
 *  - sugar a value of 60
 *  - salt a value of 3.5
 * 
 * Try to add another element to the array. Use the key 'protein' with
 * a value of 2.6. Then show the protein value on the page.
 */

 $nutrition = [
  'fat'=>42,
  'sugar'=>60,
  'salt'=>3.5,
  'protein'=>2.6,
 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>The Candy Store</h1>
  <h2>NUTRITION (PER 100G)</h2>
  <p>Fat:  <?php echo $nutrition['fat'];  ?>%</p>
  <p>Sugar:  <?php echo $nutrition['sugar'];  ?>%</p>
  <p>Salt:  <?php echo $nutrition['salt'];  ?>%</p>
  <p>Protein:  <?php echo $nutrition['protein'];  ?>%</p>
</body>
</html>