<?php
$error = false;
$md5 = false;
$code = "";
$check_arr = [...range('1','9'),...range('a','z')];
if ( isset($_GET['code']) ) {
    $code = $_GET['code'];
    if ( strlen($code) != 4 ) {
        $error = "Input must be exactly four characters";
    } else if (!in_array($code[0],$check_arr) ||
                !in_array($code[1],$check_arr) ||
                !in_array($code[2],$check_arr) ||
                !in_array($code[3],$check_arr)) {
        $error = "Input must be four lowercase letters or numbers";
    } else {
        $md5 = hash('md5', $code);
    }
}
?>
<!DOCTYPE html>
<head><title>Kevin Whiteside PIN Code</title></head>
<body>
<h1>MD5 PIN Maker</h1>
<?php
if ( $error !== false ) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

if ( $md5 !== false ) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<p>Please enter a four-letter or number key for encoding.</p>
<form>
<input type="text" name="code" value="<?= htmlentities($code) ?>"/>
<input type="submit" value="Compute MD5 for CODE"/>
</form>
<p><a href="makecode.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>
