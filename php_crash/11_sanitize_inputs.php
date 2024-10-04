<?php
  /** ----------------- Sanitizing Input --------------------- */
  /**
   * So as we learned before with forms as they are, anyone can put
   * some javascript in the form and since we are echoing to the page, 
   * we are open for attack. An example would be if we have an input for
   * comments and they are being displayed on the page. This is where we
   * would want to use specialchars and htmlentities.
   * 
   * Another way to secure it is using the functions filter_input which takes
   * 'filter_input(INPUT_POST|INPUT_GET, 'name',The Rule) that second arg is 
   * whatever the key we were using, which in this case is the 'name' of our
   * input. The rule we are using to filter is another superglobal looks like
   * In our case below its FILTER_SANITIZE-SPECIAL_CHARS. Certain ones are
   * deprecated such as FILTER_SANITIZE_STRING and FILTER_SANITIZE_STRIPPED
   * But in VSCode we get those popups to help us 
   * 
   * Another way to use these filters is with the 'filter_var' function 
   * which can be used anywhere, not just inputs. But we see what it looks 
   * like below as well. 
   */

  //  echo $_GET['name'],'<br>';
  //  echo $_GET['age'],'<br>';
  if(isset($_POST['submit'])){
    // $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = htmlspecialchars($_POST['age']); 

    $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'],FILTER_SANITIZE_SPECIAL_CHARS);

    echo "Name: $name<br>";
    echo "Age: $age<br>";
  }


   ?>

 <!-- The action could also be vulnerable so we should add specialchars
  there as well.  -->
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
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



