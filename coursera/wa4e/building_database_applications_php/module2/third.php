<?php
echo "<pre>\n";
require_once 'pdo.php'; // great use for require_once

$stmt = $pdo->query('select * from users');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  print_r($row);
}

echo "</pre>\n";


?>
