<?php
$player = new stdClass();
$player->name = 'Kevin';
$player->score = 0;

$player->score++;

class Player{
  public $name = 'Sally';
  public $score = 0;
}
$p2 = new Player();
$p2->score++;

?>

<pre>
<?= print_r($player) ?>
<?= print_r($p2) ?>

</pre>