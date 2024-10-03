<?php


/**
 *  --------------- Separate Logic From the Template --------------------
 * A lot of php devs will separate the php logic from the html user facing
 * That's why we should start to organize from now.
 * 
 * With the first step being to separate it on the same file, maybe HTML
 * at the bottom and php at the top.
 * 
 * Second step would be to split the php logic into its on file.
 * 
 * Then you include it with 'require or include' at the top or bottom of
 * the file. And now we have:
 *    index.php with the php logic
 *    index.view.php for the html view.
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

// require or include doesn't have to be at the top. Here we put it at
// the bottom.
require 'index.view.php';




