<?php
  // The include() - copies the content of a file (php/html/text) and
  // includes it in your php file. Sections of our website become 
  // reusable. Changes then only need to be made in one place. 
  include 'header.html';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
  This is your home page <br>
  Stuff about the home page can go here <br>
</body>
</html>
<?php
  include "footer.html";
?>