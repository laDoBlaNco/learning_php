<?php
require_once "pdo.php";
session_start();
?>
<html>
<head>
</head><body>
<?php
// flash messages as normal
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
?>
<table border="1">
    <!-- Our table is empty right now -->
  <tbody id="mytab">
  </tbody>
</table>
<!-- Here are the two links I see on the index page -->
<a href="add.php">Add New</a>
<a href="viewapi.php" target="_blank">viewapi.php</a>
<!-- Here we pull in jquery -->
<script type="text/javascript" src="jquery.min.js">
</script>
<script type="text/javascript">
// Simple htmlentities leveraging JQuery
function htmlentities(str) {
   return $('<div/>').text(str).html();
}
</script>
<script type="text/javascript">
// Do this *after* the table tag is rendered
// Using $.getJSON to pull from the server our JSON data
// which in this case will be the results of our pdo pull

// This then also takes care of taking that parse json and
// filling out the table above. So again its our jquery thats
// calling to the dbase through our PHP which is simply converting
// it to Json. Kinda like a livewire or hotwire type of thing
$.getJSON('getjson.php', function(rows) {
    $("#mytab").empty();
    console.log(rows);
    found = false;
    for (var i = 0; i < rows.length; i++) {
        row = rows[i];
        found = true;
        window.console && console.log('Row: '+i+' '+row.title);
        $("#mytab").append("<tr><td>"+htmlentities(row.title)+'</td><td>'
            + htmlentities(row.plays)+'</td><td>'
            + htmlentities(row.rating)+"</td><td>\n"
            + '<a href="edit.php?id='+htmlentities(row.id)+'">'
            + 'Edit</a> / '
            + '<a href="delete.php?id='+htmlentities(row.id)+'">'
            + 'Delete</a>\n</td></tr>');
    }
    if ( ! found ) {
        $("#mytab").append("<tr><td>No entries found</td></tr>\n");
    }
});
</script>
