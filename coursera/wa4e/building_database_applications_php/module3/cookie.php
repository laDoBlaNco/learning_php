<?php

// NOTE - CANNOT HAVE ANY OUTPUT BEFORE SETCOOKIE
// so php checks if the cookie is returned by the browser already
// set. If it isn't then its setscookie and on every future hit
// will expect to see it in the header under cookie:
if(!isset($_COOKIE['zap'])){
    setcookie('zap','42',time()+3600);
}
?>
<pre>
    <?php print_r($_COOKIE) ?>
</pre>

<p><a href="cookie.php">Click Me!</a> or press Refresh</p>