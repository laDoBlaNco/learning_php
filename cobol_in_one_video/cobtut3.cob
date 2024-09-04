      *Starting with Data Classification in this chapter.
       identification division.
       program-id. cobtut3.
       author. ladoblanco prod.
       date-written. September 3rd 2024.
       environment division.
      *here we can create a custom data classification, which I think would be like
      *like a class maybe?
       configuration section.
       special-names.
      *    case matters here. 'a' thru 'c','d'  IS NOT the same as 'A' thru 'C','D'
           class passing-score is "a" thru "c","d".
       data division.
       file section.
       working-storage section.
       01 age pic 99 value 0.
       01 grade pic 99 value 0.
       01 score pic x value "b".
       01 can-vote-flag pic 9 value 0.
      *    level 88 statements list potential values for the preceding element
      *    which here would be our can-vote-flag. they can be used to test the value
      *    in the preceding element.
           88 can-vote value 1.
           88 cant-vote value 0.
       01 test-number pic x.
      *    88 can also be used for designating multiple values or ranges
           88 isprime value "1","3","5","7".
           88 isodd value "1","3","5","7","9".
           88 iseven value '2','4','6','8'.
           88 lessthan5 value '1' thru '4'.
           88 anumber value '0' thru '9'.


       procedure division.
       display 'Enter age: ' with no advancing
       accept age
       if age > 18 then
           display 'You can vote'
       else
           display 'You can''t vote'
       end-if
      *You should stay away from else-if clauses as they are messy and cobol doesn't
      *like messy code.
      *We have all the normal logical operators and their figurative constants or literals
      * < or less than
      * > or greater than
      * = or equal to
      *   or  not equal to
       if age less than 5 then
           display 'Stay home.'
       end-if
       if age = 5 then
           display 'Go to kindergarten'
       end-if
       if age greater than 5 and age less than 18 then
           compute grade equal to age - 5
      *    note above the use of figurative constants 'equal to' instead of = and it worked
           display 'Go to grade ' grade 
       end-if
       if age greater than or equal to 18
           display 'Go to college'
      *    note here we don't really have to use 'then'
       end-if
      
      *Now let's use our classification. Its not a class, it basically just calling something
      *a certain var if it falls into a certain classification or range. As we did above
      *with 'passing-score' being 'a' thru 'c','d'
       if score is passing-score
           display 'You passed'
       else
           display 'You failed!'
       end-if 
      *There are also built-in or figurative classifications
      * numeric, alphabetic, alphabetic-lower, alphabetic-upper
       if score is not numeric
           display 'Not a number'
       end-if
       
      *Now let's look at toggles
       if age > 18
           set can-vote to true
       else
           set cant-vote to true
       end-if 
      *so again here above we are switching between which of the flags will be 'on' or
      *which one will be set for 'can-vote-flag' If cant-vote is true, then can-vote-flag
      *will be set to cant-vote which will give us 0 or false.
       display 'Vote ' can-vote-flag

      *So evaluate will basically just perform an action based on which value is assigned
      *to a variable
       display 'Enter single number or X to exit: '
       accept test-number
      *here we are going to see our first loop with 'perform'
       perform until not anumber
           evaluate true
      *     remember is like our switch clause. so 'evaluate true' is like in Go when
      *     we switch right on the bool
               when isprime display "Prime"
               when isodd display "Odd"
               when iseven display "Even"
               when lessthan5 display "Less than 5"
               when other display "Default action"
           end-evaluate
           accept test-number
       end-perform

      
       stop run.
