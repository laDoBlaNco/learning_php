<html>
  <head>
    <title>JQuery_01 Toggle</title>
    <script src="jquery-3.7.1.min.js"></script>
  </head>
  <body>
    <p id="para">Where is the spinner?
      <img id='spinner' src='spinner.gif' height="25"
        style="vertical-align:middle ;display:none;">
    </p>
    <a href="#" onclick="$('#spinner').toggle();return false;">Toggle</a>
    <a href="#" onclick="$('#para').css('background-color','red');return false;">Red Background</a>
    <a href="#" onclick="$('#para').css('background-color','green');return false;">Green Background</a>
    <a href="#" onclick="$('#para').css('background-color','transparent');return false;">No Background</a>
  </body>
</html>