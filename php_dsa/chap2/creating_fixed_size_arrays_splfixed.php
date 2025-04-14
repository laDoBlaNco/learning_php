<?php

/*
Creating fixed size arrays with the SplFixed Array method

so far I'e explored php arrays and now that we dont define the size of the arrays
PHP arrays can grow and shrink as per the demand. This flexibility comes with a great
inconvenience though with memory usage. I'll explore that in this section, but for now
I'll focus on creating fixed size arrays with the SPL Library

So why would I want to use a fixed sized array? What are the advanages? Basically if i know
that i only need a certain number of elements in an array, than I can use a fixed array
to reduce the memory usage.

*/

// here I create a enw fixed array object defined for 10 elements
$array = new SplFixedArray(10);

// then using a simply for loop I assign and display the elements.
for ($i = 0;$i < 10;$i++) {
    $array[$i] = $i;
}
for ($i = 0; $i < 10; $i++){
    echo $array[$i]."\n";
}

// try to access the elements out of range will result in an error
// echo $array[10];

// The differences here are that
    // SplFixedArray MUST have a defined size
    // The indexes of SplFixedArray must be integers and within the range of 0 to n, where n
    // is the size of the array we defined.

// This is very handy when I nee to have a lot of defined arrays with known sizes or have
// an upper limit for max size. But if I don't know the size than the normal php array works
