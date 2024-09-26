<?php

  /** ---------------- $_GET and $_POST Superglobals ------------------- */

  /**
   * We can pass data through urls and forms using the $_GET and $_POST
   * superglobals. GET is form urls and forms and POST just forms.
   */

  //  echo $_GET['name'],'<br>';
  //  echo $_GET['age'],'<br>';
  if(isset($_POST['submit'])){
    echo $_POST['name'],'<br>';
    echo $_POST['age'],'<br>'; 
  }

   // One thing tha happens is that if we refresh we still have the data, but
   // if we go to the URL and hit enter we get errors. We can combine some 
   // of the functions we learned early to get around this. Since we gave
   // our submit button a name we can access it from our superglobal. then
   // when we first go to the page we don't get the errors, but once they 
   // are set, they will show up.

   ?>

   <!-- NOTE: Our use of $_SERVER below and embeded php and query string -->
    <a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Kevin&age=47">Click</a>

    <!-- Now let's look at forms -->
     <!-- First we set the form action to the same file as we did with 
      the query string -->
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div>
          <label for="name">Name: </label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="age">Age: </label>
          <input type="text" name="age">
        </div>
        <input type="submit" value="Submit" name="submit">
      </form>

      <!-- So the form can be either a get request or a post request. By 
       default its get, so we don't have to add a method like method='GET'
       though we can if we want to be explicit as we did above. 
       
       NOTE one of the issues with GET on forms is that the data from GET is
       put directly into the URL. So we typically only use GET in forms for
       things like searches, where we aren't really getting any real data. But 
       otherwise its safer to use POST, so we can make that change above.
       
       All we change is the superglobal and the method to post and the rest
       is the same.-->

