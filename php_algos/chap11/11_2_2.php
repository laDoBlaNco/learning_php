<?php

/**
 * How far did the car travel?
 * 
 * A car starts from rest and moves with a constant acceleration along
 * a straight horizontal road for a specified distance. Write a script
 * that prompts the user to enter the acceleration and distance travelled
 * and then calcs the time traveled. 
 * 
 * This formula is a bit complex so I'll just look at the solution
 */

 $a=(float)readline("Enter the acceleration: ");
 $S=(float)readline("Enter the distance travelled: ");

 $t=sqrt(2*$S/$a);

 echo"My car traveled for $t seconds\n";