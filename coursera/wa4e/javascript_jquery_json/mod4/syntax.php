<html>
  <head>
    <title>JSON 01 SYNTAX</title>  
</head>
<body>
  <script>
    // looks like json but its just executable javascript constant in js
    // but its legitimate json, crazy and cool
    who = {
      'name':'Chuck',
      'age':29,
      'college':true,
      'offices':['3350dmc','3437nq'],
      'skills':{'fortran':10,'C':10,
        'C++':5,'python':'7',
      }
    };

    window.console && console.log(who);
  </script>
  <p>Check out the console.log to see the cool object</p>
</body>
</html>