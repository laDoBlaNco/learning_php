<?php

// Print current timestamp - seconds since Jan 1 1970
echo time(),"<br>";
// Print current date
echo date("Y-m-d H:i:s"),"<br>";
// Print yesterday
echo date("Y-m-d H:i:s",time()-60*60*24),"<br>";

// Different format: https://www.php.net/manual/en/function.date.php
  echo date("F j Y H:i:s"),"<br>";

// String to timestamp
echo strtotime('+1 day'),"<br>"; # this can replace the 'time()-60*60*24 format above

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$date_string = '2025-01-06 12:45:35';  // declaring the date
$parsed_date = date_parse($date_string); // parsing the date
echo '<pre>';
print_r($parsed_date);
echo '</pre>';

// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$date_string = 'January 6 2025 12:45:35'; // in a non-default format
$parsed_date = date_parse_from_format('F j Y H:i:s',$date_string);
echo '<pre>';
print_r($parsed_date);
echo '</pre>';

