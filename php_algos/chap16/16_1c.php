<?php
$name = readline("Enter the name of an Olympian: ");

if($name=='Zeus'){
  echo"You are the King of the Gods!\n";
}

echo"You live on Mount Olympius\n";

/**
 * Note that the last echo statement does NOT belong to the block of
 * statements of the single-alternative decision structure.
 * 
 * A very common mistake that novice programmers make when writing php
 * is to confuse the value assignment operator with the 'equal' operator
 * They frequently make the mistake of writing 
 * if($name='Zeus') when they actually want to say if($name=='Zeus')
 * 
 * When only one single statement is enclosed in the if statement,
 * We can omit the braces {}. Thus, the if statement can be written
 * as a single line.
 * 
 * But many programmers will use braces always so as not to have 
 * potential bugs in the logic.
 */