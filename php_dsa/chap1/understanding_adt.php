<?php

/**
 * Understanding Abstract Data Types - (ADT)
 * 
 * Hopefully this is the only chpater where I'm not coding. But here
 * we go.
 * 
 * PHP has eight primitive data types and those are booleans,integer,
 * float,string,array,object,resource, and null. Also, we have to remember
 * that PHP is a weakly typed language and that we are not bothered about
 * the data type declaration while creating those. Though PHP has some
 * static type features, PHP is predominantly a dynamically typed language
 * which means variables are not required to be declared before using it. We
 * can assign a value to a new variable and use it instantly.
 * 
 * For the examples of data structures we have discussed so far can we use any
 * of the primitive data types to represent thsoe structures? Maybe yes maybe no
 * Our primitive data types have one particular objective: storing data. In order
 * to achieve some flexibility in performing operations on that data, we will
 * require using the data types in such a way so that we can build particular
 * models and perform certain operations. This particular way of handling data
 * through a conceptual model is known as an Abstract Data Type, or ADT. ADT
 * also defines a set of possible operations for that data. (This is the normal
 * process I've seen when learning DSA, but I have a better understanding of 
 * how and why we build these the way we do)
 * 
 * We need to understand that ADTs are mainly theoretical concepts which are used
 * in design and analysis of algorithms, data structures, and software design.
 * In contrast, data structures are concrete representations. In order to implement
 * ADT, we might need to use data types or data structures or both. The most common
 * exmaple of ADTs is stacks and queues. 
 * 
 * Considering the stack as ADT, it is not only a collection of data but also two
 * important operations called push and pop. Usually, we put a new entry at the
 * top of the stack which is known as 'push' and when we watn to take an item, we
 * take from the top which is also known as 'pop'. If we consider PHP array as a
 * stack, we will require additional funtionality to achieve these push and pop
 * operations to consider it as stack ADT. Similarly, a queue is also an ADT 
 * with two required operations: to add an item at the end of the queue also 
 * known enqueue and remove an item from the beginning of the queue, also known
 * as dequeue. Both sound similar but if we give a close observation we will see
 * that a stack works as a LIFO model whereas a queue works as a FIFO model. These
 * two different matematical models make them two different ADTs.
 * 
 * Here are some common ADTs:
 *  -- list
 *  -- map
 *  -- set
 *  -- stack
 *  -- queue
 *  -- priority queue
 *  -- graph
 *  -- tree
 * 
 * In coming chapters, we will explore more ADTs and implement them as data 
 * structures using PHP.
 * 
 * Different Data Structures:
 * We can categorize data structures in to two different groups:
 *  -- Linear data structures
 *  -- Nonlinear data structures
 * 
 * In linear data structures, items are structured in a linear or sequential 
 * manner. Array, list, stack, and queue are examples of linear structures. In
 * nonlinear structures, data are not structured in a sequential way. Graph and
 * tree are the most common examples of nonlinear data structures. 
 * 
 * Let's explore the world of data structures, with different types of data 
 * structures and their purposes in a summarized way. Later on, we will explore each
 * of the data structures in details. 
 * 
 * There are many different types of data structures that exist in the programming
 * world. Out of them, the following are the most used ones:
 *  -- struct
 *  -- array
 *  -- linked list
 *  -- doubly linked list
 *  -- stack
 *  -- queue
 *  -- priority queue
 *  -- set
 *  -- map
 *  -- tree
 *  -- graph
 *  -- heap
 * 
 * Structs:
 * Usually, a variable can store a single data type and a single scalar data 
 * type can only store a single value. There are many situations where we might 
 * need to group some data types together as a single complex data type. For
 * example, we want to store some student information together in a student data
 * type. We need the student name, address, phone number, email, data of birth, 
 * current class, and so on. In order to store each student record to a unique
 * student data type, we will need a special structure which will allow us to
 * to do that. This can be easily achieved by struct. In other words, a struct
 * is a container of values which is typically accessed using names. Though structs
 * are very popular in C, we can use a similar concept in PHP as well. (assoc arrays
 * maybe). We are going to explore that in coming chapters. 
 * 
 * 
 * Arrays:
 * Though an array is considered to be a data type in PHP, an array is actually a
 * data structure which is mostly used in all programming platforms. In PHP, the
 * array is actually an ordered map (we are going to know about maps after a few
 * more sections). We can store multiple values in a single array as a single 
 * variable. Matrix type data are easy to store in an array and hence it is used 
 * widely in all programming platforms. Usually arrays are fixed size collections
 * which are accessed by sequential numeric indexes. in PHP, arrays are implemented
 * a bit differently and you can define dynamic arrays without defining any fixed
 * size of the array. We will explore more about PHP arrays in the next chapter. 
 * Arrays can have different dimensions. If an array has only one idnex to access
 * an element, we call it a single dimension array. But if it requires two or
 * more indexes to access an element, we call it two dimensional or multidimensional
 * arrays respectively. We can picture those as rows and columns of tables. 
 * 
 * 
 * Linked List:
 * A linked list is a linear data structure which is a collection of data elements
 * also known as nodes and can have varying sizes. Usually listed items are connected
 * through a pointer which is known as a link hence it is known as a linked list. 
 * In a linked list, one list element links to the next element through a pointer. 
 * The linked list usually maintains an ordered collection. Linked lists are the
 * most common and simplest form of data structures used by programming languages.
 * In a single linked list, we can only go forward. In chapter 3 we are going to
 * dive deep inside the linked list concepts and implementations. 
 * 
 * 
 * Doubly Linked List:
 * A doubly linked list is a special type of linked list where we not only  store
 * what is the next node, but we also store the previous node inside the node structure
 * As a result, it can move forward and backward within the list. It gives more 
 * flexibility than a single linked list or linked list by having both the previous
 * and next pointers. We'll also see these in chapter 3
 * 
 * 
 * Stacks:
 * As we talked about the stack in previous pages, we already know that stacks
 * are linear data structures with a LIFO model. As a result, stacks have only 
 * one end to add a new item or remove an item. It is one of the oldest and most
 * used data structures in computer technology. We always add or remove an item
 * from a stack using the single point named top. The term push is used to indicate
 * an item to be added on top of the stack and pop to remove an item from the top;
 * We talk more about stacks in chapter 4 - Constructing Stacks and Queues
 * 
 * 
 * Queue:
 * A queue is another linear data structure which follows the FIFO model. A queue
 * allows two basic operations on the collection. The first one is enqueue which
 * allows us to add an item to the back of the queue. The second one is dequeue
 * which allows us to remove an item from the front of the queue. A queue is 
 * another of the most used data structures in computer technology. We will learn
 * more about queues in chapter 4. 
 * 
 * 
 * Set:
 * A set is an abstract data type which is used to store certain values These
 * values are not stored in any particular order but there should not be any 
 * repeated values in the set. Sets are not used like collections where we retrieve
 * specific values from them; a set is used to check the existance of a value inside
 * it. Sometimes a set data structure can be sorted and we call it an ordered set.
 * 
 * 
 * Map:
 * A map is a collection of key and value pairs where all the keys are unique. We
 * can consider a map as an associative array where all keys are unique. We can add 
 * and remove using key and value pairs along with update and look up from a map
 * using a key. In fact, PHP arrays are ordered map implementations. We will see
 * more about them in the next chapter about arrays.
 * 
 * 
 * Trees:
 * A tree is the most widely used nonlinear data structure in the computing
 * world. It is highly used for hierarchical data structures. A tree consists
 * of nodes and there is a special node which is known as the root of the tree
 * which starts the tree structure. Other nodes descend from the root node. 
 * Tree data structure is recursive which means a tree can contain many subtrees.
 * Nodes are connected with each other through edges. We are going to discuss 
 * different types of trees, their operations, and purposes in chapter 6.
 * 
 * 
 * Graphs:
 * A graph data structure is a special type of nonlinear data structure which 
 * consists of a finite number of vertices or nodes and edges or arcs. A graph
 * can be both directed and undirected. A directed graph clearly indicates the
 * direction of the edges, while an undirected graph mentions the edges, not the
 * direction. As a result, in an undirected graph, both directions of edge are
 * considered as a single edge. In other words, we can say a graph is a pair 
 * of sets (V,E), where V is the set of vertices and E is the set of edges:
 * V = {A,B,C,D,E,F} 
 * E = {AB,BC,CE,ED,EF,DB}
 * 
 * In a directed graph, an edge AB is different from an edge BA while in an 
 * undirected graph, both AB and BA are the same. Graphs are handy to solve lots
 * of complex problems in the programming world. We are going to continue our
 * discussion of graph data structures in chapter 9, Putting Graphs into Action.
 * 
 * 
 * Heaps:
 * A heap is a special tree-based data structure which satisfies the heap properties.
 * The largets key is the root and smaller keys are leaves, which is known as 
 * max heap. Or the smallest key is the root and the larger keys are leaves, which
 * is known as min heap. (I think I remember something about Heaps when I was
 * learning Go). Though the root heap structure is either the largest or smallest
 * key of the tree, it is not necessarily a sorted structure. A heap is used for
 * solving graph algos with efficiency and also in sorting. We are going to
 * explore heap data structures in chapter 10, Understanding and Using Heaps.
 * 
 * 
 * Solving a problem - algorithmic approach
 * 
 * So far we have discussed different types of data strutures and their usage.
 * But, one thing we have to remember is that just putting data in a proper 
 * structure might not solve or problems. We need to find solutions to our problems
 * using the help of data structures or in other words, we aren't going to solve
 * problems using data structures. We need algorithms to solve our problems. 
 * 
 * An algorithm is a step by step process which defines the set of instructions
 * to be executed in a certain order to get a desired output. In general, rithms
 * are not limited to any programming language or platform. They are independent 
 * of programming language. An algo must have the following characteristics:
 *  -- Input: an algorithm must have well-defined input. It can be 0 or more inputs
 *  -- Output: an algorithm must have well-defined output. It must match the desired
 *     output.
 *  -- Precision; All steps are precisely defined
 *  -- Finiteness: An algorithm must stop after a certain number of steps. It should
 *     not run indefinitely
 *  -- Unambiguous: An algorithm should be clear and should not have any ambiguity in
 *     any of the steps.
 *  -- Independent: An algorithm should be independent of any programming language
 *     or platform
 * 
 * Now we will be looking at creating algorithms, but in order to do that, we need
 * a problem statement. So let's assume that we have a new shipment of books for 
 * our library. There are 1000 books and they are not sorted in any particular order.
 * We need to find books as per the list and store them in their designated shelves.
 * How do we find them from the pile of books?
 * 
 * We can solve the problem in different ways. Each way has a different approach
 * to find out a solution for the problem. We call these approaches algorithms. To
 * keep the discussion short and precise, we are going to only consider two approaches
 * to solve the problem. We know there are several other ways as well but for 
 * simplicity let us keep our discussion only for one algorithm. 
 * 
 * We will store our books in a simple row so that we can see the book names. Now,
 * we will pick a book name from the list and search from one end of the row to 
 * the other end till we find the book. So basically, we are going to follow a
 * sequential search for each of the books. We will repeat these steps until
 * we place all books in their designated places.  (Note our algo is based or
 * modeled on real life)
 * 
 * 
 * Writing pseudocode:
 * As I know, programs are written for machine reading. We have to write them in
 * a certain format which will be compiled for the machine to understand. But often
 * those written codes are not easy to follow folks that aren't programmers. In
 * order to show them informally so that humans can also understand, we prepare
 * pseudocode. Its not an actual programming language but it has similar strutural
 * conventions. Since pseudocode does not run as a real program, there is no standard
 * way of writing pseudocode. So we can follow our own way of doing so.
 * 
 * Here is ours to find a book
 * Algorithm findabook(L,book_name)
 *   Input: list of books L & name of the search book_name
 *   Output: False if not found or position of the book we are looking for
 * 
 *   if L.size = 0 return null
 *   found := false
 *   for each item in L, do
 *     if item  = book_name, then
 *       found := position of the item
 *   return found
 * 
 * 
 * And placing the book
 * Algorithm placeallbooks(OL,L)
 *   Input: list of ordered books OL, List of received books L
 *   Output: nothing.
 * 
 *   for each book_name in OL, do
 *     if findabook(L,book_name), then
 *       remove the book from the list L
 *       place it on the bookshelf
 * 
 * Now we have the complete pseudocode for our algorithm of solving the book
 * problem. Here we are going through the list of ordered books and finding the
 * book in the delivered section. If the book is found, we are removing it from
 * the list and placing it to the right shelf.
 * 
 * This simple approach of writing pseudocode can help us solve more complex
 * problems in a strutured manner. Since pseudocodes are independent of programming
 * languages and platforms, algorithms are expressed as pseudocode most of the time. 
 * 
 * 
 * FINALLY WE GET TO SOME REAL CODE. Converting pseudocode to actual code
 */

function find_a_book(Array $booklist,String $bookname){
  $found = false;

  foreach($booklist as $index=>$book){
    if($book === $bookname){
      $found = $index;
      break;
    }
  }
return $found;
}

function place_all_books(Array $ordered_books,Array &$booklist){
// I didn't know 'references' existed in php, interesting 🤓
  foreach($ordered_books as $book){
    $book_found = find_a_book($booklist,$book);
    if($book_found !== false){
      array_splice($booklist,$book_found,1);
    }
  }
}

$booklist = ['PHP','MySQL','PGSQL','Oracle','Java'];
$ordered_books = ['MySQL','PGSQL','Java'];
place_all_books($ordered_books,$booklist);
echo implode(', ',$booklist),"\n";

// i found references in my PHP Mysql Duckett book. Which means that
// I get an explaination there. So I'll focus on finishing that book
// and working through this one as a second priority. let's now 
// look at algorithm analysis