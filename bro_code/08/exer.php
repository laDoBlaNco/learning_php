<?php

$date = date('l');
echo $date."<br>";
// $date = "Sunday";

switch($date){
  case "Monday":echo"I hate Mondays<br>";break;
  case "Tuesday":echo"It is taco Tuesday<br>";break;
  case "Wednesday":echo"The work week is half over<br>";break;
  case "Thursday":echo"Its almost the weekend<br>";break;
  case "Friday":echo"The weekend is here!<br>";break;
  case "Saturday":echo"Time to party!<br>";break;
  case "Sunday":echo"Time to relax<br>";break;
  default:echo"$date is not a day<br>";
}

