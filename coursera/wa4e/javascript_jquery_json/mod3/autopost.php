<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms and JQuery</title>
  <script src="jquery-3.7.1.min.js"></script>
</head>
<body>

<!-- Summary
 This focuses on the mechanics of low-level jQuery
  - Initialization setup
  - Event handling
  - DOM selection
  - DOM manipulation
  - Handling form data (its no longer 'error' with jquery, its 'fail')

 Next I'll look at how to use JSON to read data from the server.
  
  -->
  <form id="target">
    <input type="text" name="one" value="Hello there"
      style="vertical-align:middle;"/>
    <img id="spinner" src="spinner.gif" height="25"
      style="vertical-align:middle;display:none;">
  </form>
  <div id="result"></div>

  <script>
    $('#target').change((event)=>{
      $('#spinner').show();
      let form = $('#target');
      let txt = form.find('input[name="one"]').val();
      window.console && console.log('Sending POST');
      $.post('autoech.php',{'val':txt},(data)=>{
        window.console && console.log(data);
        $('#result').empty().append(data);
        $('#spinner').hide();
      }).fail(()=>{
        $('#target').css('background-color','red');
        alert('DAGNABBIT!!!');
      });
    });
  </script>

</body>
</html>