      * Paragraphs - we can use paragraphs to subdivide our code. Cobol uses
      * what we call gravity-driven programming. Meaning that the execution is
      * taken place as we "fall through" our code until the conditions or procedures
      * take us in another direction. So basically the normal top-down approach.
       identification division.
       program-id. cobtut4.
       author. ladoblanco.
       date-written. September 4th 2024.
       environment division.
       configuration section.
       data division.
       file section.
       working-storage section.
       
       procedure division.
      * First an example of an opened paragraph to show how we fall through code 
       subone.
           display 'In Paragraph 1'
           perform subtwo
               display 'Returned to Paragraph 1'
               perform subfour 2 times.
               
           stop run.

       subthree.    
           display 'In Paragraph 3'.

       subtwo.
           display 'In Paragraph 2'
           perform subthree
           display 'Returned to Paragraph 2'.

       subfour.
           display 'Repeat!'.
      *    Something is wrong with these code, but even Derek did it wrong.
      *    This should display repeat twice, and it only prints once.
      *    From my understanding it shouldn't perform this way. I'll comb back
      *    and fix when I understand it a bit more.     

       stop run.
