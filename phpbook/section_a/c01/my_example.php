<?php
  $username = "L@D0Bl@N0";      // variable to hold username
  $greeting = "Hi, $username";  // greeting, using interpolation instead of
                                  // concatenation
  $offer = [                    // Create array to hold offer
    'item'=>'Chocolate',        // item to offer
    'qty'=>3,                   // quantity to buy
    'price'=>6,                 // usual price per pack
    'discount'=>4,              // offer price perpack
  ];

  $usual_price = $offer['qty']*$offer['price'];   // usual total price
  $offer_price = $offer['qty']*$offer['discount']; // offer total price
  $saving = $usual_price-$offer_price;
?>

<!-- --------------------------------------------------- -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Example</title>
  <link rel="stylesheet" href="css/styles.css">
 </head>
 <body>
  <h1>The Candy Store</h1>
  <h2>Multi-buy Offer</h2>
  <p><?= $greeting ?></p>
  <p class="sticker">Save $<?=$saving  ?></p>
  <p>
    Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?>
    for $<?=$offer_price?> <br> (usual price $<?=$usual_price?>)
  </p>
 </body>
 </html>