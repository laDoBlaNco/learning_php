<?php

/**
 * Calculating the Distance Between Two Points
 * 
 * Write a script that prompts the user to enter the coords (x,y) of
 * two points and then calculates the straigh line distance between
 * them. The required formula is:
 * 
 * d = sqrt((x1-x2)**2 + (y1-y2)**2)
 * 
 * I need to use sqrt function
 */

 $x1 = (float)readline("Please enter the first x coord: ");
 $y1 = (float)readline("Please enter the first y coord: ");
 $x2 = (float)readline("Please enter the second x coord: ");
 $y2 = (float)readline("Please enter the second y coord: ");

 $result = sqrt(($x1-$x2)**2 + ($y1-$y2)**2);

 echo"The resulting distance from point ($x1,$y1) and ($x2,$y2) is $result\n";
 