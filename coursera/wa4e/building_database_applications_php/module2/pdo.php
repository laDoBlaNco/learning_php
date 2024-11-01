<?php

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc','ladoblanco','zap');

// WE WANT TO SEE THE ERRORS WHILE IN DEV MODE
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
