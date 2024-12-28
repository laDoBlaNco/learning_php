<?php

/**
 * Exercise 13.1-3 Displaying an Elapsed Time
 * 
 * Writing a php script that prompts the user to enter an integer
 * that represents an elapsed time in seconds and then displays it in
 * the format of "DD day(s) HH hour(s) MM minute(s) and SS second(s)"
 * For example, if teh user enters the number 700005, the message
 * should read: 
 *  8 day(s) 2 hour(s) 26 minute(s) and 45 second(s).
 * 
 * using our first approach we saw in the previous exercise:
 */

 // we can isolate the number of days by dividing the integer by 86400
 // using '/' and (int) for integer division. 
 $days = (int)(700005/86400);

 // then the remaining seconds can be isolated by doing the same but
 // using % to get the rem.
 $r = 700005%86400;

 // Now we get the hours by dividing that rem by 3600 seconds
 $hours = (int)($r/3600);
 // and find the remainder of that
 $r%=3600;

 // Then the same for minutes but using 60 seconds
 $minutes = (int)($r/60);

 // and the last remainder are the seconds
 $seconds = $r%60;

 echo"$days day(s) $hours hour(s) $minutes minute(s) $seconds seconds\n";