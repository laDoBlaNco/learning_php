<?php
// added two more values.
$best_sellers = ['Toffee', 'Mints', 'Fudge','Jelly Beans','Licorice'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>foreach Loop - Just Accessing Values</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <!-- Changed the var to 'candy' 
     Also tested and can easily get both key and value just by
     adding $key=>$value then it gives me the index as the key -->
    <?php foreach ($best_sellers as $candy) { ?>
      <p><?= $candy ?></p>
    <?php } ?>
  </body>
</html>