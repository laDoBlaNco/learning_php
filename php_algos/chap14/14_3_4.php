<?php

/**
 * Creating a Random Word
 * 
 * Write a PHP script that displays a random word consisting of 3 letters
 * 
 * To create a random word we need a string that contains all 26 letters
 * of the alphabet. Then we can use rand() function to choose a random 
 * between positions 0 and 25.
 */

 $alpha = 'abcdefghijklmnopqrstuvwxyz';

 $rand_word = $alpha[rand(0,25)].$alpha[rand(0,25)].$alpha[rand(0,25)];

 echo $rand_word,"\n";