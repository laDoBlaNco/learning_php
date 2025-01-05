<?php
// hashing = transforming sensitive data (password) into letters,
// numbers, and/or symbols via a mathematical process. (similar to 
// encryption) 
// Hides the original data from 3rd parties.

$password = 'php123';
$hash = password_hash($password,PASSWORD_DEFAULT);

echo $hash,'<br>';

if(password_verify('php123',$hash)){
  echo "Your are logged in";
}else{
  echo "Incorrect Password";
}