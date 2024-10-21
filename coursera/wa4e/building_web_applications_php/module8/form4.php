<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WA4E - Forms4</title>
</head>
<body>
  <!-- Many times we want persistant data from one page to another which means
   that we send (post) our form data but thenw e need to copy it back into the
   form from $_POST -->
   <?php
    $oldguess = isset($_POST['guess']) ? $_POST['guess']:'';
   ?>

  <p>Guessing game...</p>
  <!-- POST example: post is different in that you tell the form that 
   method="post" and the same k=>v data pairs will be sent through a post
   method to the server and not through the url -->
  <form method="post">
    <p><label for="guess">Input Guess</label>
    <!-- we use value= for the form to put it back in the form -->
     <!-- Also notic our short form  -->
      <input type="text" name="guess" size="40" id="guess" value="<?= $oldguess ?>">
    </p>
    <input type="submit">
  </form>
  <!-- NOTE, THE ABOVE CODE IS HORRIBLE AS ITS OPEN TO HTML INTERJECTION
   WHICH IS ALSO KNOWN AS XSS OR CROSS SITE SCRIPTING. BUT WE CAN FIX IT:
   ENTERING STAGE LEFT...HTMLENTITIES (form5.php) -->

  <pre>
    <?= $oldguess ?>
    <?= print_r($_POST) ?>
  </pre>
</body>
</html>