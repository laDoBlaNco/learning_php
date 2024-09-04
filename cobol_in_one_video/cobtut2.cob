      *Starting with chapter - Variabls / Datatypes
       identification division.
       program-id. cobtut2.
       author. ladoblanco prod.
       date-written. September 2nd 2024
       environment division.
       data division.
       file section.
       working-storage section.
      *Remember x (alphanumeric) a (alpha, just letters) 9 (numeric)
       01 sampleData pic x(10) value "stuff".
       01 justLetters pic aaa value "abc".
      *note here we don't put 9999 just 9(4)
       01 justNums pic 9(4) value 1234.
      *We can also do signed numbers specifically
       01 signedNums pic s9(4) value -1234.
       01 paycheck pic 9(4)v99 value zeroes.
      *Note here we have 2 layers of hierarchy, so like a strut kinda of in other langs or an object.
       01 customer.
           02 ident pic 9(3).
           02 custname pic x(20).
           02 dateofbirth.
               03 mob pic 99.
               03 dob pic 99.
               03 yob pic 9(4).
       01 num1 pic 9 value 5.
       01 num2 pic 9 value 4.
       01 num3 pic 9 value 3.
       01 ans pic s99v99 value 0.
      *note here we didn't set a value, just the var def
       01 rem pic 9v99.


       procedure division.
       move "More stuff" to sampleData.
       move "123" to sampleData.
       move 123 to sampleData.
       display sampleData.
       display paycheck.
      *to put things on one line we need to accomodate for the spaces of the def var type we are going to use
       move "123Bob Smith           12211974" to customer.
       display customer.
       display custname.
       display mob"/"dob"/"yob

      *Now let's talk about figurative constants. With is basically just saying we type more english words 
       move zero to sampleData.
       display sampleData.
       move space to sampleData.
       display sampleData.
       move high-value to sampleData.
       display sampleData.
       move low-value to sampleData.
       display sampleData.
       move quote to sampleData.
       display sampleData.
       move all "2" to sampleData.
       display  sampleData.

      *Now some math, other than compute
      *also note that we are 'giving' the result to a var to then do something with that var.
       add num1 to num2 giving ans
       display ans
       subtract num1 from num2 giving ans
       display ans
       multiply num1 by num2 giving ans
       display ans
       divide num1 into num2 giving ans
       display ans
       divide num1 into num2 giving ans remainder rem
       display "Remainder:" rem

      *We can also using multiple numbers at once. cobol excels in precise math
       add num1,num2 to num3 giving ans
       display ans
       add num1,num2,num3 giving ans
       display ans
       compute ans=num1+num2
       display ans
      *Note I had to put spaces here because it read num1-num2 as a var. so better to use spaces for readability and consistency
       compute ans= num1 - num2
       display ans
       compute ans=num1*num2
       display ans
       compute ans=num1/num2
       display ans
       compute ans = num1**2
       display ans
      *Again here spaces killed me. Better to put spaces around the + * - / math stuff
       compute ans = (3 + 5) * 5
       display ans
       compute ans = 3 + 5 * 5
       display ans
      *Note the additional kw 'rounded' before the '='
       compute ans rounded = 3.0 + 2.005
       display ans

      * Great stuff here. Now let's move on to data classification




       stop run.
