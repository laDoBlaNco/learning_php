<?php
/**
 * Write a php script that prompts the user to enter their name and 
 * then creates a secret password consisting of 3 letters (in lowercase)
 * randomly picked up from their name, and a random four-digit number.
 * For example, if the user enters:
 * "Vassilis Bouras" a secret password can probably be one of
 *    sar1359
 *    vbs7281
 *    bor1459
 * Space chars are not allowed in the secret password
 */

 $name = readline("Please enter your name: ");

 $name = str_replace(' ','',strtolower($name));

 $pass = $name[rand(0,strlen($name))].$name[rand(0,strlen($name))].$name[rand(0,strlen($name))].rand(1000,9999);

 echo "$pass\n";