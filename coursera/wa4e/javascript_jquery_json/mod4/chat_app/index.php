<?php
  session_start();
  if(isset($_POST['reset'])){
    $_SESSION['chats'] = [];
    header('Location:index.php');
    return;
  }
  if(isset($_POST['message'])){
    if(!isset($_SESSION['chats'])) $_SESSION['chats'] = [];
    $_SESSION['chats'][]=[$_POST['message'],date(DATE_RFC822)];
    header('Location:index.php');
    return;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Chat App</title>
  <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
  <h1>Chat</h1>
  <form action="index.php" method="post">
    <p>
      <input type="text" name="message" size="60"/>
      <input type="submit" value="Chat"/>
      <input type="submit" name="reset" value="Reset">
    </p>
  </form>
  <div id="chatcontent">
    <img src="spinner.gif" alt="Loading chats...">
  </div>
  <script>
    function update_msg(){
      window.console && console.log('Requesting JSON');
      $.ajax({
        url: 'chatlist.php',
        cache:false,
        success:(rowz)=>{
        window.console && console.log('JSON received');
        window.console && console.log(rowz);
        $('#chatcontent').empty();
        for(let i=0;i<rowz.length;i++){
          entry = rowz[i];
          $('#chatcontent').append(`<p>${entry[0]}<br/>&nbsp;&nbsp;${entry[1]}</p>\n`);
        }
        setTimeout('update_msg()',2000);
        }
      });
    }

    // Make sure JSON requests are not cached
    $(document).ready(()=>{
      $.ajaxSetup({cache:false});
      update_msg();
    });
  </script>
</body>
</html>