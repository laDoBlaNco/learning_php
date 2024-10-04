<?php

/** ----------------------- Cookies ------------------------- */

/**
 * Cookies are a mechanism for storing data in the remote browser
 * and thus tracking or identifying return users. You can set specific
 * data to be stored in the browser, and then retrieve it when the user 
 * visits the site again. 
 * 
 * So since it is stored on the client you don't want to store sensitive
 * data  in cookies. Just general info
 */

 // Set Cookie
 setcookie('name','Kevin',time()+86400*30); // a cookie expiring after 30 day
 // which we can see in dev tools under Application -> Cookies

 if(isset($_COOKIE['name'])) echo $_COOKIE['name'];

 setcookie('name','',time()-86400); // this will unload the cookie or delete it