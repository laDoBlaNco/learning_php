<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WA4E Forms - More Inputs</title>
</head>
<body>
  <p>Many field types ...</p>
  <form action="more.php" method="post">
    <p><label for="inp01">Account:</label>
      <input type="text" name="account" id="inp01" size="40">
    </p>
    <p><label for="inp02">Password:</label>
      <input type="password" name="pw" id="inp02" size="40">
    </p>
    <p><label for="inp03">Nick Name:</label>
      <input type="text" name="nick" id="inp03" size="40">
    </p>
    <p>
      Preferred Time:<br/>
      <!-- the key here is the 'name'. That's what connects all radio buttons
       no matter where they are on the page. Sane people would of course put them
       all together. 🤓 -->
      <input type="radio" name="when" value="am">AM<br/>
      <input type="radio" name="when" value="pm" checked>PM<br/>
    </p>
    <p>
      Classes Taken: <br>
      <input type="checkbox" name="class1" value="si502" checked>
        SI502 - Networked Tech <br>
      <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine <br>
        <!-- If you don't add the value and the box is checked the value is "on" -->
      <input type="checkbox" name="class3" checked>
        SI543 - Java <br>
    </p>
    <p>
      <label for="inp06">Which Beverage:</label>
      <select name="soda" id="inp06">
        <!-- The value can be any string, but most people use numbers -->
        <option value="0">Please Select</option>
        <option value="1">Coke</option>
        <option value="2">Pepsi</option>
        <option value="3">Mountain Dew</option>
        <option value="4">Orange Juice</option>
        <option value="5">Lemonade</option>
      </select>
    </p>
    <p>
      <label for="inp07">Which Snack:</label>
      <select name="snack" id="inp07">
        <!-- The value can be any string, but most people use numbers -->
        <option value="">Please Select</option>
        <option value="chips">Chips</option>
        <option value="peanuts" selected>Peanuts</option>
        <option value="cookie">Cookie</option>
      </select>
    </p>
    <p>
      <!-- Here's another select but with multiple selection -->
      <!-- MOST PEOPLE SAY DON'T USE THIS, BUT ITS AN INTERESTING ONE -->
       <label for="inp09">Which are awesome? <br></label>
       <!-- with out the [] you won't get an array in POST, it'll just be the
        last selection -->
       <select multiple="multiple" name="code[]" id="inp09">
        <option value="python">Python</option>
        <option value="css">CSS</option>
        <option value="html">HTML</option>
        <option value="php" selected>PHP</option>
       </select>
    </p>
    <p>
      <label for="inp08">Tell us about yourself: <br></label>
      <textarea rows="10" cols="40" id="inp08" name="about" id="">
I love building apps with PHP and SQL. I also use the TALL stack (Tailwind, AlpineJS, Laravel, and Livewire). My favorite RDBMS is Postgresql.
      </textarea>
    </p>

    <!-- submit itself can have a name and a value, but its different because this
     is th only one where the value is also what shows on the button. So one way not
     to have to remember and use button names in your code is to just check and see if
     it was pushed with 'isset()', then you don't have to worry what the value is 
     and it works since we typically look for the name, not the value -->
    <input type="submit" name="dopost" value="Submit">
    <!-- We can also override the behavior of a button that is more of a link than a button, meaning
     it'll take us somewhere else and it won't actually post anything since we tell
     it to 'return false' as if it was never pushed. -->
     <input type="button"
      onclick="location.href='http://localhost/module8/form3.php';return false;"
      value="Escape">
  </form>

  <pre>
    $_POST:
    <?php
      print_r($_POST);
    ?>
  </pre>
</body>
</html>