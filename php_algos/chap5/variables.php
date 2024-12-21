<?php

// declaring vars in php is simple due to its dynamic nature. 
// the main conventions are snake_case or lowerCamelCase.
// php uses a dollar sign $ for normal vars.
$number1 = 0;
$found = false;
$first_name = "Hera";

// constants are declared with the 'define' kw, and they can't 
// be changed.
// define("NAME",value); - convention also being all caps for consts
define("VAT",0.22);
define("COMPUTER_NAME",'pc01');
define("FAVORITE_SONG","We are the world");

// These values can't be altered while the program is running. 
// Again all statements must end with a ';'
echo $number1."\n";
echo $found."\n";
echo $first_name."\n";
echo VAT."\n";
echo COMPUTER_NAME."\n";
echo FAVORITE_SONG."\n";

// define("VAT",0.55);  // this gives us a error: Constant VAT already defined...