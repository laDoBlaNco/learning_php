<?php

/**--------- EP 3 First PHP Tag ---------------------- */
    // anything between these php tags even mixed in with HTML will be considered
    // php and not html
    // we can use 'echo' or 'print' (stick to echo) to print to the page
    echo 'Hello Universe';  // we end all commands with a semi-colon
    echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Episode 3 - First PHP Tag
  </title>
</head>
<body>
  <h1>
    <?php
      echo 'Hello world!';
    ?>
  </h1>

  <p>
    <?php
      echo 'The teach asked me to echo some gibberish test within a paragraph tag.'

    ?>

  </p>
</body>
</html>