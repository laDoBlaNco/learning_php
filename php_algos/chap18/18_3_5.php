<?php

/**
 * Two football teams play against each other int he UEFA Champ league
 * Write a php script that prompts the user to enter the names of the 
 * two teams and the goals each team scored and then displays the name
 * of the winner or the message "It's a tie!" when both teams score
 * equal number of goals. Assume that the user enters valid data.
 */
echo"Please enter team #1 and their score:\n";
$team1 = readline("Team #1: ");
$score1 = readline("Team #1 score: ");
echo"Now enter team #2 and their score:\n";
$team2 = readline("Team #2: ");
$score2 = readline("Team #2 score: ");


if($score1 > $score2){
  echo"The $team1 won with a score of $score1!\n";
}elseif($score1 < $score2){
  echo"The $team2 won with a score of $score2!\n";
}else{
  echo"It's a tie!\n";
}