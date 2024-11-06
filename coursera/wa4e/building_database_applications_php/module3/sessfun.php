<?php
// NOTE - AGAIN CANNOT HAVE ANY OUTPUT BEFORE THIS SESSION START
session_start();
if(!isset($_SESSION['pizza'])){
    echo "<p>Session is empty</p>\n";
    $_SESSION['pizza'] = 0;
}else if($_SESSION['pizza']<3){
    $_SESSION['pizza']++;
    echo "<p>Added one...</p>\n";
}else{
    session_destroy();
    session_start();
    "<p>Session Restarted<\p>\n";
}
?>

<p><a href="sessfun.php">Click Me!</a></p>
<p>Our Session ID is: <?= session_id() ?></p>
<pre>
    <?php print_r($_SESSION) ?>
</pre>