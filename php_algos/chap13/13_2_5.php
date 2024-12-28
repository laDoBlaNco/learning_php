<?php

/**
 * Write a PHP script that prompts the user to enter an integer representing
 * an elapsed time in seconds and then displays it in the format 
 * 
 * "WW week(s)) DD day(s) HH hour(s) MM minute(s) and SS second(s).
 * 
 * For example, if the user enters 2000000, the message should echo:
 * "3 week(s) 2 day(s) 3 hour(s) 33 minute(s) and 20 second(s)"
 */

$original_seconds = (int)readline("Please enter an elapsed time in seconds: ");

$sec = $original_seconds%60;
//  echo $sec,"\n";
$r = (int)($original_seconds/60);
$min = $r%60;
//  echo $min,"\n";
$r = (int)($r/60);
$hr = $r%24;
// echo $hr,"\n";
$r = (int)($r/24);
$day = $r%21;
// echo $day,"\n";
$week = (int)($r/7);
// echo $week,"\n";

echo"$week week(s) $day day(s) $hr hour(s) $min minute(s) and $sec second(s)\n";

