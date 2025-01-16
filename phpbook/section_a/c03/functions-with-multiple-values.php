<?php
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    // add the exchange rate for aud
    'au' => 1.32,
];

function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro'  => $usd * $exchange_rates['eu'],
        'yen'   => $usd * $exchange_rates['jp'],
        // added in the element for austrailian dollar
        'aud'   => $usd * $exchange_rates['au'],
    ];
    return $prices;
}

$global_prices = calculate_prices($us_price, $rates);
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Functions with Multiple Values</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>US $<?= $us_price ?></p>
    <p>(UK &pound; <?= $global_prices['pound'] ?> | 
        EU &euro;  <?= $global_prices['euro']  ?> | 
        JP &yen;   <?= $global_prices['yen'] ?> |
        <!-- added the aud dollar -->
        AUD &#65;&#117;&#36;   <?= $global_prices['aud'] ?>)</p>
  </body>
</html>