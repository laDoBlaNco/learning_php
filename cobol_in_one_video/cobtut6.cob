      * Now let's get into loopping. Remember we used 'perform' in another program
      * along with the 'n times' directive, but it didn't work. So let's see if 
      * we have something missing that I can go back and fix on tht one.
       identification division.
       program-id. cobtut6.
       environment division.
       configuration section.
       data division.
       file section.
       working-storage section.
      
       procedure division.

      * Remember that this needs to send not only with a '.' but with a newline
      * in order to compile without warnings.
       stop run.
