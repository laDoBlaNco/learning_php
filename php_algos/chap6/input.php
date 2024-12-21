<?php

/**
 * How can we prompt the user to the enter data?
 * In our flowchart we use the keyword 'read' to show input into
 * our program. When the read statement is executed, the flow of 
 * execution is interrupted until the user has entered all the data. 
 * When data entry is complete, the flow of execution cotinues to 
 * the next statement. Usually data are entered from a keyboard.
 * 
 * In php we do this with 'readline'
 */

 // reading a string from the keyboard 
 // $var_name_str = readline([prompt])

 // reading an integer we simply cast it
 // $var_name_int = (int)readline([prompt])

 // read a real (float) from the keyboard
 // $var_name_float = (float)readline([prompt])

 // prompt is an optional message to the user. It can be either
 // a variable or a string literal.
//  $name = readline("What is your name? ");
//  echo "Hello there $name\n";

 // let's try prompting for a string and a float
 $product_name = readline("Enter product name: ");
 $product_price = (float)readline("Enter product price: ");

 // The following will get a string and an int
 $name = readline("What is your name? ");
 $age = (int)readline("What is your age? ");

 echo"Wow $name, you are only $age and you are already buying $product_name for $product_price?\n";
