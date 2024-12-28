<?php
/**
 * A robot arrives on the moon in order to perform some experiments
 * Each of the robot's steps is 25 inches long. Write a php script
 * that prompts the user to enter the number of steps the robot made
 * and then calculates and displays the distance traveled in miles., 
 * feet, yards, and inches. For example: if the distance traveled is
 * 100000 inches, the script must display the message:
 * "1 mile(s), 1017 yard(s), 2 foot/feet, and 4 inch(es)"
 */

 $steps = (int)readline("Please enter the number of steps: ");

 $distance = (int)($steps*25);

//  echo $distance,"\n";
$mile = (int)($distance/63360);
// echo $mile,"\n";
$rest = $distance%63360;
$yard = (int)($rest/36);
// echo $yard,"\n";
$rest = $rest%36;
$feet = (int)($rest/12);
// echo $feet,"\n";
$in = $rest%12;
// echo $in,"\n";

echo"$mile mile(s), $yard yard(s), $feet foot/feet, and $in inch(es)\n";


