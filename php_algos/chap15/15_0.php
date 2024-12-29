<?php
/**
 * Making questions - All we have learned so far is the sequence 
 * control structure, where statements are executed sequentially, the
 * the same order in which they appear in the script. However, in 
 * serious PHP programming, rarely do you want the statements to be
 * executed sequentially. Many times you waant a block of statements 
 * to be executed in one situation and an entirely different block of
 * statements to be executed in another situation.
 * 
 * What is a Boolean Expression?
 * Let's say that a var $x contains a value 5, so we can ask the question
 * "is $x greater than 2?" For a computer these questions are Boolean 
 * expressions. We can write $x > 2 and the computer will check if 
 * they are true or false.
 * 
 * - A boolean expression is an expression that results in a bool 
 *   value, that is, either true or false
 * - Boolean expressions are questions and they should be read as
 *   "is something equal to/greater than/less than something else?"
 *   And the answer is just a "yes" or "no"
 * - A decision control structure can evaluate a boolean expression
 *   or a set of boolean expressions and then decide which block
 *   of statements to execute.
 * 
 * - == - equal to
 * - != - not equal to
 * - > greater than
 * - < less than
 * - >= greater than or equal to
 * - <= less than or equal to
 * 
 * When you combine simple boolean expressions with logical operators
 * the boolean expression is called a complex Boolean expression. For
 * example, the expression $x==3 && $y > 5 is a complex Boolean
 * expression. 
 * 
 * In flowcharts, this book uses the commonly accepted and,or, and not
 * operators.
 * 
 * - The order of precedence of Logical Operators is the following:
 *    - ! 
 *    - &&
 *    - ||
 * 
 * - Precedence against other operators:
 *    **
 *    *,/,%
 *    +,-
 *    <,<=,>,>=,==,!=
 *    ! 
 *    &&
 *    ||
 * 
 * 
 * 
 */