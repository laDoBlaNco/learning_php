<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <!-- <style>
    body{
      display: grid;
      place-items: center;
      /* height: 100vh; */
      margin: 0;
      font-family: sans-serif;
    }
  </style> -->
</head>
<body>
  
  <?php 



     /** -------------- EP 7 Associative Arrays ---------------------- */
     // Now when we want to grab specific things from an array we can use [] syntax 0 based index
     // or as we'll see associative arrays with key => value syntax, similar to pythons dicts 
     // or js objects. And they are look objects because we can embed the associative data in
     // the arrays.

     // NOTE directly from php docs around camelCase vs snake_case:
     // Function names use underscores between words, while class names use both
     // camelCase and PascalCase rules. 
     // Some examples:
      // curl_close() - function
      // mysql_query() - function
      // PREG_SPLIT_DELIM_CAPTURE - constant
      // new DOMDocument() - class with Pascal Case
      // strpos (example of a post mistake. This should have been str_pos, but legacy php)
      // new SplFileObject() - class with Pascal Case.


    $books = [
      [
        'name'=>'Do Androids Dream of Electric Sheep',
        'author'=>'Phillip K. Dick',
        'purchase_url'=>'http://example.com',
        'release_year'=>1968,
      ],[
        'name'=>'The Langoliers',
        'author'=>'Stephen King',
        'purchase_url'=>'http://example.com',
        'release_year'=>1990,
      ],[
        'name'=>'Project Hail Mary',
        'author'=>'Andy Weir',
        'purchase_url'=>'http://example.com',
        'release_year'=>2021,
      ],

    ]
    // With the assocative array we can do stuff like below, where we create
    // a link again using the associative array keys
   

  ?>

    <h1>Recommended Books</h1>
      <?php foreach($books as $book):?>
        <li>
          <a href="<?=$book['purchase_url']?>">
            <?="$book[name] - $book[release_year]"?>
          </a>
        </li>
      <?php endforeach;?>

    </ul>

<!-- HOMEWORK - Extend the book lists from this episode to also include and 
 display the release year immediately after the books title.  DONE DEAL-->

  
</body>
</html>