<html>
  <head>
    <title>JQuery_01 Resize</title>
  </head>
  <body>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
      $(window).resize(()=>{
        console.log(`.resize() called. width=${$(window).width()} and height=${$(window).height()}`);
      });
    </script>
    <p>Here is some awesome page content</p>
  </body>
</html>