<?php

/**
 * In coming chaps we are going to talk about many different data
 * structures and algos. One of the key data structs we will focus on
 * is the graph. We already know the definition graph data structures
 * Most of the time we will be using PHP multi-dimensional arrays to rep
 * that data as an adjacency matrix. 
 * 
 * if we consider each node of a graph to be a value in an array we can
 * rep it like this:
 */
$nodes = ['A', 'B', 'C', 'D', 'E'];

/**
 * But here we only have the names. We can't connect or create the 
 * edges (relationships) between the nodes. In order to do that, we
 * need to construct a 2-dimensional array where the node names will
 * be keys, and values will be 0 or 1 based on the interconnectivity of
 * two nodes. Since there is no direction provided in the graph, we
 * don't know if A connects to C or if C connects to A, So we'll assume
 * both
 * 
 * First we create an array for the graph and initialize each node of our
 * two dimensional array as 0
 */
$graph = [];
foreach ($nodes as $x_node) {
    foreach ($nodes as $y_node) {
        $graph[$x_node][$y_node] = 0;
    }
}

// Now let's print the array to see how it actually looks before we 
// work with the connectivity.
foreach ($nodes as $x_node) {
    foreach ($nodes as $y_node) {
        echo $graph[$x_node][$y_node] . "\t";
    }
    echo "\n";
}
echo"\n";

// now let's define the edges of the nodes in such a way that a 
// connection between the two nodes will be expressed as a value of 1
$graph["A"]["B"] = 1;
$graph["B"]["A"] = 1;
$graph["A"]["C"] = 1;
$graph["C"]["A"] = 1;
$graph["A"]["E"] = 1;
$graph["E"]["A"] = 1;
$graph["B"]["E"] = 1;
$graph["E"]["B"] = 1;
$graph["B"]["D"] = 1;
$graph["D"]["B"] = 1;

// here we have no direction in our original graph diagram, so we are
// considering this as an undirected graph and hence we are setting 
// two values  to 1 for each connection. We'll talk more about defining
// connectivity between nodes and why we a re doing it in later chapters
// For now we are just focusing on how to use multidimensional arrays for
// data structures. Let's reprint it.

foreach ($nodes as $x_node) {
    foreach ($nodes as $y_node) {
        echo $graph[$x_node][$y_node] . "\t";
    }
    echo "\n";
}

// we'll learn more in 'Putting Graphs into Action'

