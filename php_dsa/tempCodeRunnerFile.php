<?php

/**
 * One of the key questions that I might have is when to use splfixedarray insteaod of
 * php arrays. I will now explore that answer. I've already come across the concept  that
 * php arrays aren't actually arrays but rather hash maps. So let's look at a memory usage
 * of a php array. 
 * 
 * i'll create an array with 100,000 unique php ints. Each int should take 8 bytes on my
 * machine. So we are talking about 800,000 bytes of memory for the array * 
 */

 $start_memory = memory_get_usage();
 $array = range(1,100000);
 $end_memory = memory_get_usage();
 echo"\n";
 echo ceil(($end_memory - $start_memory)/(1024*1024))." MB\n";

 /**
  * The memory usage is more than we anticipated. Thsi means that each element has an aoverhead
  * why does php use so much extra memory? PHP stores data in a bucket to avoid collision and
  * to accomodate mroe data. To manage this dyanmic nature, it implements both a doubly linked
  * list as well as a hash table internally for arrays. Eventually, it costs lots of extra mem
  * space for each individual element in the array. I'll need to dig into PHP internals (C) in
  * to really understand memory usage
  * 
  * In PHP 7 there was an improvement of 2.5 times for 32 bit and 3.5 times for 64 bit systems
  * for the array storage. 
  *
  *
  * But what about SplFixedArray?
  */
  $items = 100000;
  $start_memory_2 = memory_get_usage();
  $array2 = new SplFixedArray($items);
  for($i=0;$i<$items;$i++){
    $array[$i] = $i;
  }
  $end_memory_2 = memory_get_usage();

  $memory_consumed = ($end_memory_2 - $start_memory_2) / (1024*1024);
  $memory_consumed = ceil($memory_consumed);
  echo"\n";
  echo"memory = {$memory_consumed} MB\n";