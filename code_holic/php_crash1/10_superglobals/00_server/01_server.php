<?php
// suprglobals alway start with $_ and in all caps.
// Most superglobals shouldn't be printed to the user. This one is 
// especially that case as it has all of your server information which
// would be great for a hacker to attack our system.

var_dump($_SERVER);
echo '<pre>';
print_r($_SERVER);
echo '</pre>';