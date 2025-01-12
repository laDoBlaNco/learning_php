<?php

/**
 * Try to add Licorice to this array after Fudge, then add the 
 * 4th and 5th items from the array
 */
$best_sellers = ['Chocalate','Mints','Fudge','Licorice','Buggle Gum','Toffee',
                  'Jelly Beans',];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <ul>
    <li><?php echo $best_sellers[0] ?></li>
    <li><?php echo $best_sellers[1] ?></li>
    <li><?php echo $best_sellers[2] ?></li>
    <li><?php echo $best_sellers[3] ?></li>
    <li><?php echo $best_sellers[4] ?></li>
  </ul>
</body>

</html>