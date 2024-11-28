<?php
sleep(2);
$stuff = array('first'=>'first thing',
  'second'=>'second thing');

echo json_encode($stuff); // so if I don't echo I just get 1 or true that the
// conversion took place.