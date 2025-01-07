<?php
/**
 * User: TheCodeholic
 * Date: 2/8/2020
 * Time: 9:49 AM
 */

 echo '<pre>';
 print_r($_GET);
 echo '</pre>';

 // On the first run through we need to  make sure the $_GET var is
 // set or we'll get a warning. 

 $keyword = '';
 if(isset($_GET['search'])){
   $keyword = $_GET['search'];
   echo $keyword,"<br>";
   // do whatever we want with that keyword...
 }


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- Here we have our action set to "" which will simply send the
   request/response back to this same page and the method set to 'get'
   which is the less secure method and puts the data right in the url for 
   all to see. 
   
   The keyword of the kw=val pairs is taken from the name of our input below
   "keyword"
   
   I can change it to 'search' for example-->
<form action="" method="get">
  <!-- We can also put the superglobals right back into the html tags as PHP
   is a templating language -->
  <input type="text" name="search" value="<?= $keyword ?>"
         placeholder="Type and hit enter">
  <button>Search</button>
</form>
</body>
</html>
