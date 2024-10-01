<?php
  /**
   *  --------------- FUNCTIONS AND FILTERS --------------------
   * 
   * I like his description. Functions are like the 'verbs' of the programming
   * world. Itz  purpose is really to hide confusing logic behind a simple name
   * 
   * Reminder from Jeff that we use '=' to assign a value and '===' to check
   * for equality. Its notable he doesn't even mention '==' which has the
   * same auto coercion that JS has.
   */

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
      ],[
        'name'=>'The Martian',
        'author'=>'Andy Weir',
        'purchase_url'=>'http://example.com',
        'release_year'=>2011,
      ],

    ];

      function filter_by_author($books,$author){
        // Function to filter our book by author
        // Takes an array of books and the author to filter on
        $filtered_books = [];
        
        foreach($books as $book){

          if($book['author']===$author){
            $filtered_books[]=$book;
          }
        }
        return $filtered_books;
      }

    $movies = [
      [
        'name'=>'A Nightmare on Elm Street',
        'year'=>1984,
      ],[
        'name'=>'Awakenings',
        'year'=>1990,
      ],[
        'name'=>'A League of Their Own',
        'year'=>1992,
      ],[
        'name'=>'A Bronx Tale',
        'year'=>1993,
      ],[
        'name'=>'Angels in the Outfield',
        'year'=>1994,
      ],[
        'name'=>'A Time to Kill',
        'year'=>1996,
      ],[
        'name'=>'Amistad',
        'year'=>1997
      ],[
        'name'=>'Anaconda',
        'year'=>1997
      ],
    ];

    function movie_filter($movies,$year){
      // simple movie filter that will take an array of movies
      // and filter up by the year. A cutoff so to speak
      $filtered_movies = [];
      
      foreach($movies as $movie){
        if($movie['year']>=$year){
          $filtered_movies[] = $movie;
        }
      }
      return $filtered_movies;
    }

?>

<h1>BOOK RECOMMENDATION:</h1>

<ul>
  <?php foreach(filter_by_author($books,'Andy Weir') as $book):?>

      <li>
        <a href="<?=$book['purchase_url']?>">
          <?=$book['name']?> (<?=$book['release_year']?>) - By <?=$book['author']?>
        </a>
      </li>

  <?php endforeach ?>

</ul>

  <!-- HOMEWORK: Create an array of my favorite movies, including their respective
   release dates. Then, write a function that filters the list of movies down to only
   those that were released in the year 2000 or higher. Display the results in an
   unordered list. -Since I'm using movies before 2000 I'll do the same as
   the function above and make it take the year as well to filter by 
   
   AND IT WORKS!! -->

<br><br>
<h1>MOVE FILTER:</h1>
<ul>
  <?php foreach(movie_filter($movies,1994) as $movie):?>
    <li><?=$movie['name']?> (<?=$movie['year']?>)</li>
  <?php endforeach;?>
</ul>

