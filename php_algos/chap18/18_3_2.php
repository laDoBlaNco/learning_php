<?php

// another trace table problem. Using for practice on if..else

$amount = (float)readline();

if($amount < 20){
  $discount = 0;
}elseif($amount >= 20 && $amount < 60){
  $discount = 5;
}elseif($amount >= 60 && $amount < 100){
  $discount = 10;
}elseif($amount >= 100){
  $discount = 15;
}

// note we don't have a default else here

$payment = $amount - $amount * $discount/100;

echo"$discount, $payment\n";