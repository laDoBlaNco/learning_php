<?php
  /**
   *  --------------- Separate Logic From the Template --------------------
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

  <!-- HOMEWORK: 

  -->

