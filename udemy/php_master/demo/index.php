<?php
// So with the following function we can turn on and off errors programmatically
// off is 0 and on is 1. The below will turn them on even on a production server
// but locally just for our application. We can then comment it out and remove it
// to get out of "developer mode" so to speak.

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// as we see here they are both off LOCALLY though the master is on. 
// To turn off the master you would go to the /opt/lampp/php/php.ini file and do
// so there globally.
phpinfo();

// the phpinfo() function is super helpful as we can also use it to find the location
// of all the log and configuration files on the server.

// there also another function that we can use to manually write to the error log
// file as well. 'error_log'
