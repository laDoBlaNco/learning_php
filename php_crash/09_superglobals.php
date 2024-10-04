<?php

  /** ----------------------- Superglobals ---------------------- */
  /**
   * Built in variables that are always available in all scopes. Seem
   * similar to certain built-in consts in other langs
   * 
   * They are all going to be arrays.
   * $_GET - Contains information about vars passed through a URL or a form
   * $_POST - Contains info about vars passed in through a form.
   * $_COOKIE - Contains info about vars passed through cookies.
   * $_SESSION - Contains info about vars passed through a session.
   * $_SERVER - Contains info about the server environment.
   * $_ENV - Contains info about the environment variables. 
   * $_FILES - Contains info about files uploaded to the script
   * $_REQUEST - Contains info about vars passed through the form or URL
   * 
   * We'll go through most of these in separate sections 
   */

   var_dump($_SERVER); // associative array with keys and values. 
   foreach($_SERVER as $key=>$value){
    echo $key,': ',$value,'<br>';
   }

   // I came up with that foreach myself, meaning I'm starting to get php 
   // ;OP

   