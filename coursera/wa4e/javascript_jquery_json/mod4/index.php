<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sending and Receiving JSON</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
  <p>Let's get us some JSON:</p>
  <div id="back">Before</div>
  <script>
    $(document).ready(()=>{
      $.getJSON('json.php',(data)=>{
        $("#back").html(data.second);
        window.console && console.log(data);
      });
    });
  </script>
</body>
</html>