      * Related to the paragraphs we did in cobtut4, we can create subroutines
      * in separate programs and then pass values back and forth.
       identification division.
       program-id. coboltut5.
       data division.
       working-storage section.
           01 num1 pic 9 value 5.
           01 num2 pic 9 value 4.
           01 sum1 pic 99.
       procedure division.
      * then in this division of the 'calling' program, we just use 'call'
      * using the same variables in the same order we want them to be used
      * in the linked program
       call 'getsum' using num1,num2,sum1.
       display num1 ' + ' num2 ' = ' sum1.


      * we also ahve to compile the linked file with an -m instead of an -x
      * maybe cuz its considered a 'module'?
       stop run.


      * Now let's get into looping. 
       