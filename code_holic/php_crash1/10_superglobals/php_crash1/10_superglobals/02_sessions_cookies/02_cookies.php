<?php

// Explain what is cookie
// Cookies are used for 3 main reasons:
  // 1. Session management using the session_id that we just saw
  // 2. Personalization for the user.
  // 3. Tracking pages and users

// The limit is that a cookie can only occupy 4kbs. they are not made
// for holding sensitive information. Secure data should be saved
// on the server in sessions not on cookies on the user side.

setcookie('name','ladoblanco',time()-60,'/');

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

// There's more  on sessions but we'll look at that later in a 
// less crashed crash course.