       identification division.
      *This is how we do comments and there are no multiline comments
      *here we define ownership info
       program-id. cobtut.
       author. Kevin Whiteside.
       date-written. Sept 2nd 2024
       environment division.
      *will contiain the environment info such as country specific, devices available, etc

       data division.
      *will describe the data and will have 4 SECTIONS (file, working-storage, linkage, report)
      *Note here the set up of Division -> Section -> Paragraph -> Sentence -> Statement -> Character string
       file section.
      *will contain the data both sent and received from storage
       working-storage section.
      *is going to define vars inside of the program
      *there is a hierarchal form of creating variabls, mainly meaning we can group vars in vars
       01 username pic x(30) value "You".
      *Note the '.' to end each statement or sentance I guess. There are also multiple
      *ways to write things such as below (zero, zeroes, 0) 
      *pic basically means var and value is the assignment. 
      *the 99 for example is the max for each digit along with the number of digits
      *pics can be numeric 999 alphanumeric xxx or alpha aaa
      *with numericas we can also use signed s9 or unsigned 9 and floats 99v99(just using . with 2 places)
      *COBOL IS NOT STATICALLY TYPED. the hacker needs to enforce typing
       01 num1 pic 9 value zeros.
       01 num2 pic 9 value zeros.
       01 total pic 99 value 0.
      *here's an example of the hierarchal way of struturing data. 
       01 ssnum.
           02 ssarea pic 999.
           02 ssgroup pic 99.
           02 ssserial pic 9999.
      *here we have a constant vars
       01 PIVALUE constant as 3.14.
      *We also have what are call figurative constants which we've seen some of already
      *A figurative comment will represent either something specfic (zero) or figurative (zeroes)
      *high and low-values for example will be just that for whatever the max or min for the defined type we create
      *so for example from low-value (0) to high-value (9999) for our ssserial above
      *again we can use zero, zeroes, 0, space, spaces or a space ( ), high-value(s), low-value(s)
      *
       linkage section.
      *will define data available to other programs
       report section.
      *will have data used to generate reports
       procedure division.
      *Here we put the actual verbs or code to make our program do something. typically you'll tab in for
      *readability where you want o
           display "What is your name?" with no advancing
      *    the 'with no advancing' allows us to not have a newline added
           accept username
      *    will accept the user input and store it in whatever var we put
           display "Hello " username

      *    We can also  move or change vars which is basically reassigning them. In the reassigning
      *    we can use things of different type, so again its our job to enforce typing
           move zero to username
           display username
      *    also note that moving zero will fill to the max length of that defined type, in this case 30
           
           display "Enter 2 values to sum "
           accept num1
           accept num2

      *    There are multiple ways to do calculations which we'll see. Such as 'compute' 'add' 'subtract', etc
           compute total=num1+num2
           display num1 " + " num2 " = " total 

           display "Enter your social security number "
           accept ssnum
           display "Area " ssarea
      *    Good to note as well all the results all fit into the types we defined. for example the 09 because
      *    we said total was two digits (99) or if we try to put a 66 in num1, it'll only see 6, etc.

      

      *Every cobol program will end with 'stop run.' though it doesn't have the be the very last statement
           stop run.
      *NOTE - interestingly I see that the errors I get when compiling are basically everything that's 
      *not found after the error. So if I can't find the error I can find the first callout  in the 
      *stacktrace and look at the code right before it. more times than not, that'll be wherre the error
      * is 

       