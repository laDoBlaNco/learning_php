<?php

/**
 * Exercise 10.1-3 - Where is the Car?
 * Calculating Distance Travelled
 * 
 * A car starts from rest and moves with a constant acceleration 
 * along a straight horizontal road for a specified time. Write a
 * php script that prompts the user to enter the acceleration and
 * the time the car travelled, and then calculates and displays
 * the distance traveled. The required formula is a bit complex
 */

 $a = (float)readline("Enter acceleration: ");
 $t = (float)readline("Enter time traveled: ");

 $s = 0.5*$a*$t**2;

 echo"Your car traveled $s meters\n";

