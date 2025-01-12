<?php

// again we have the payrate and OT problem, but this time with
// the dual alternative decision structure

$pay_rate = (float)readline("Please enter a rate of pay: ");
$hours_worked = (float)readline("Please enter the hours worked: ");

if($hours_worked<=40){
  $gross_pay = $pay_rate*$hours_worked;
}else{
  $gross_pay = $pay_rate*40+1.5*$pay_rate*($hours_worked-40);
}

echo"Gross Pay: $gross_pay\n";