      * Here we are linking values from one program to another creating
      * a subroutine to run and calculate the sum also changing the values
      * in the other program. So not necessaril returning but linking the
      * changes???
       identification division.
       program-id. getsum.
       data division.
       linkage section.
      * Here we are going to put our values with different names from 
      * what they are in the other file. so adding a 'L'
           01 lnum1 pic 9 value 5.
           01 lnum2 pic 9 value 5.
           01 lsum1 pic 99.

       procedure division using lnum1,lnum2,lsum1.
      * Now with 'using', any values we change here will be changed in
      * the calling program, because they are linked.
           compute lsum1 = lnum1 + lnum2.

      * Then note that we 'exit program' rather than 'stop run.'
       exit program.
      * Also I made reference to it in the calling program, but this code with the actual
      * linkage, must be compiled using -m instead of -x with cobc. That -m stands for
      * 'build a dynamically loadable module (default), and it creates an .so file
      * instead of an executable. So basically the same thing an 'ld' linker would
      * do with an assembly file, or a C linker does with with C file.
