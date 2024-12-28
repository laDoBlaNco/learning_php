<?php
/**
 * Chapter 12 Complex Mathematical Expressions.
 * 
 * I've learned about many of the operators in php, but part of the 
 * essence of algorithms are the formulas and writing our own complex
 * expressions. So here we are going to learn how to convert mathematical
 * expressions to php statements. 
 * 
 * PHP aritmetic operators follow the same precedence rules as in math
 * which means that exponentiation is performed first (**), multiplication
 * and division, modulos next (*,/,%) and then addition and subtraction (+,-)
 * 
 * Moreover, when multiplication and division co-exist in the same 
 * expression, and since both are of the same precedence, these operations
 * are performed left to right.
 * 
 * The exponentiation operator (**) serves a dual role. Apart from being used 
 * to calculate the power of a value raised to another value, it is also
 * used to compute any root of a number using the known mathematical formula.
 * 
 * It seems like this chapter is simply  a lot of working with precedence
 * and exercises. Let's see if I find anything new here.
 * 
 * Like:
 */

 $x = (float)readline();
 $z = (float)readline();

 $y = 10 * $x - (10 - $z) / 4;

 echo"The result is: $y\n";