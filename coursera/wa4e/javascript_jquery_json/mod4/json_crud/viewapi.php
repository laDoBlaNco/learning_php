<html>
<head>
</head>
<body>
<p>Howdy - Lets get a JSON list</p>
<script type="text/javascript" src="jquery.min.js">
</script>
<script type="text/javascript">
  // This simply shows us some of the data pulled from the dbase
$(document).ready( function () {
  $.getJSON('getjson.php', function(data) {
      for (var i = 0; i < data.length; i++) { 
         window.console && console.log(data[i].title);
      }
    })
  }
);
</script>
</body>
