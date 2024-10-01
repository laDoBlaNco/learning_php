<?php
  /**
   *  --------------- LAMBDA FUNCTIONS --------------------
   * So in order for us not to have to start to repeat code and create
   * 10 different filters, we need to make this more generic. So what do we
   * do. 
   * 
   * Step1 - Extract a var, meaning we take a piece of logic out of something
   *         and put it into a variable.
   * 
   * Step2 - Rather than using a named function we can use anonymous functions
   *         which we can assign to a var or pass to other functions. 
   * 
   * After creating and using an anony function, we also see that our function
   * is very similar to one of phps built-in arrays functions. So let's
   * pop that one in there
   * 
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

    // Changed this to an anony function assigned to a variable
      $filter = function ($items,$fn){
        // Function to filter our book by author
        // Takes an array of books and the author to filter on
        $filtered_items = [];
        
        foreach($items as $item){

          if($fn($item)){
            $filtered_items[]=$item;
          }
        }
        return $filtered_items;
      };

      // we extracted some logic and put it into this var.
      // Using now the built-in array function, which has the same sig
      // as what Jeff built
      $filtered_items = array_filter($books,function($book){
        return $book['release_year'] >= 1950 && $book['release_year'] <= 2020;
      });





?>

<h1>BOOK RECOMMENDATION:</h1>

<ul>
  <?php foreach($filtered_items as $item):?>

      <li>
        <a href="<?=$item['purchase_url']?>">
          <?=$item['name']?> (<?=$item['release_year']?>) - By <?=$item['author']?>
        </a>
      </li>

  <?php endforeach ?>

</ul>

  <!-- HOMEWORK:  Update the book filtering logic from above to only display books
   that  were published between 1950 and 2020. Basically just change up our anony 
   function we are feeding to the 'array_filter' - Easily done using &&

  -->

