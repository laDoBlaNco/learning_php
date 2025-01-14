<?php

/**
 * Algorithm Analysis
 * 
 * After completing our algo in the previous section, we still have one
 * thing we haven't done yet. Analyze it. A valid question in the current
 * scenario might be, why do we really need to have an analysis of our 
 * algorithm?  Though we've already written the implementation, we are not
 * sure about how many resourcees our written code will utilize. when we say
 * resource, we mean both time and storage rersources utilized by the running
 * application. We write algos to work with any length of the input. In order
 * to understand how our algorithm behaves when the input grows larger and 
 * how many resources have been utilized, we usually measure the efficiency 
 * of an algorithm by relating the input length to the number of steps 
 * (time complexity) or storage (space complexity). it is very important
 * to do the analysis of algorithms in order to find the most efficient algorithm
 * to solve our problem. 
 * 
 * We can do algo analysis in two different stages. One is done before implementation
 * and one after the fact. That analysis we do before implementation is also known 
 * as theoretical analysis and we assume that other factors such as processing power
 * and spaces  are going to be  constant. The after implementation analysis is
 * known as emperical analysis which can vary from platform to platform or from
 * language to language. In emperical analysis we can get solid statistics from
 * the system regarding time and space utilization. 
 * 
 * Let's looks at the time complexity of our algo.
 * 
 * 
 * Calculating the Complexity:
 * So there are two types of complexity that we measure in algorithmic analysis:
 * 
 *  -- Time complexity: Time complexity is measured by the number of KEY operations
 *     in the algorithm. In other words, time complexity quantifies the amount of
 *     time taken by an algorithm from start to finish.
 *  -- Space Complexity: Space complexity defines the amount of space (in memory)
 *     required by the algorithm in its life cycle. It depends on the choice of 
 *     data structures and platforms.
 * 
 * Let's focus on our implemented algorithm and find out about the operations we
 * are doing for the algorithm. In our place_all_books function, we are searching
 * for each of our ordered books. So if we have 10 books, we do the search 10 timees.
 * If the number is 1000, we are doing the search 1000 times. So simply, we can say
 * if there is n number books, we are going to search n number of times. In algo
 * analysis, input number is mostly represented by n and m. 
 * 
 * For each item in our ordered books, we ar doing a search using the findabook function
 * Inside the function, we are again searching thorugh each of the received books 
 * with a name we received from the place_all_books function. Now if we are lucky
 * enough, we can find the name of the book at the beginning of the list of received
 * books. In that case, we do not have to search the remaining items. But what if 
 * we are very unlucky and the book we are searching for is at the end of the list?
 * We then have to search each of the books and, at the end, we find it. If the 
 * number of received books is also n, then we have to run the comparison n times. 
 * 
 * If we now assume that other operations are fixed, the only variable should be
 * the input size. We can then define a boundary or mathematical equation to define 
 * the situation to calculate its runtime performance. We call it asymptotical
 * analysis. Asymptotical analysis is input bound which means if there is no input,
 * other factors are constant. We use asymptotical analysis to find out the best
 * case, worst case, and average case scenario of algorithms:
 * 
 *  -- Best case: Best case indicates the minimum time required to execute the
 *     program. For our example algo, the best case can be that, for each book,
 *     we are only searching the first item. So, we end up searching for a very
 *     little amount of time. We use sigma notation to indicate the best case
 *     scenario.
 *  -- Average case: It indicates the average time required to execute a program
 *     For our algorithm the average case will be finding the books around the 
 *     middle of the list  most of the time, or half of the time they are at the
 *     beginning and the remaining half at the end of the list.
 *  -- Worst case: it indicates the max running time for a program. The worst case
 *     example will be finding the books at the end of the list all the time. We
 *     use the O(big Oh) notation to describe the worst case scenario. For each
 *     book search in our algo, it can take O(n) running time. From now on, we
 *     will use this notation to express the time complexity of our algos.
 * 
 * 
 * Understanding the Big O Notation:
 * The big O notation is very important for the analysis of algorithms. We need to
 * have a solid understanding of this notation and how to use this in the future. 
 * We are going to discuss the big O notation throughout this section. 
 * 
 * Our algo for finding the books and placing them has n number of items. For the
 * first book search, it will compare n number of books for the worst case situation.
 * If we say tiem complexity is T, then for the first book the time complexity will
 * be:
 * T(1) = n
 * As we are removing the founded book from the list, the size of the list is now
 * n-1. For the second book search, it will compare n-1 number of books for the worst
 * case situation. then for the second book, the time complexity will be n-1. Combining
 * the both time complexities, for the first two book we will see
 * T(2) = n + (n-1)
 * As we continue like this, after the n-1 steps the last book search will only have
 * 1 book left to compare. So the total complexity will like:
 * T(n) = n + (n-1) + (n-2) + ............+ 3 + 2 + 1
 * which we can say is:
 * T(n) = n(n+1)/2  or T(n) = n2/2 + n/2 
 * 
 * Ignoring the low order terms and constant multipliers we can express the TC
 * with the Big O Notation as n squared
 * T(n) = O(n2)
 * 
 * Throughout this book, we will be using this big O notation to describe complexity
 * of the algos or operations. These are the 7 most common seen:
 * 
 *  -- constant => O(1)
 *  -- linear => O(n)
 *  -- Logarithmic => O(log n)
 *  -- n log n => O(n log n)
 *  -- quadratic => O(n^2)
 *  -- cubic => O(n^3)
 *  -- Exponential => O(2^n)  -- this is not the same as O(2n)
 * 
 * 
 * The Standard PHP Library (SPL) and Data Structures
 * The SPL is one of the best possible features of the php language in the 
 * last few years. SPL was created to solve common problems which were lacking
 * in php. SPL extended the language in many ways but one of the striking features
 * of SPL is its support of data structures. Though SPL is used for many other 
 * purposes, we are going to focus on the data structure part of the SPL. SPL
 * comes with core PHP installations and does not require any extension or change
 * in configurations to enable it 😍.
 * 
 * SPL provides a set of standard data structures through OOP in PHP. The supported
 * DS are:
 * 
 *  -- Doubly linked lists: Implemented in SplDoublyLinkedList
 *  -- Stack: implemented in SplStack by extending and using SplDoublyLinkedList
 *  -- Queue: implemented in SplQueue by extending and using SplDoublyLinkedList
 *  -- Heaps: implemented in SplHeap. Also supporting max (SplMaxHeap) and min
 *     (SplMinHeap) heaps
 *  -- Priority Queues: implemented in SplPriorityQueue by extending and using
 *     SplHeap
 *  -- Arrays: implemented in SplFixedArray for a fixed size array
 *  -- Maps: implemented in SplObjectStorage
 * 
 * In coming chapters we are going to explore each of the SPL data structure 
 * impelementations and learn their pros and cons, along with their performance
 * analysis with our implementation of corresponding data structures. But as these
 * DS's are already built-in, we can use them for a quick turnaround of features
 * in applications. 
 * 
 * After release of PHP7, everyone was happy with the performance boost of PHP
 * applications in general. PHP SPL is not having the similar performance boost in 
 * many cases, but we are going to analyze those in upcoming chapters. 
 * 
 * 
 * Summary:
 * In this chapter, we focused our discussion on basic data structures and their
 * names. We have also learned about solving problems with defined steps, known
 * as algorithms. We have also learned about analyzing the algrithms and the big O
 * notation along with how to calculate the complexity. We also touched on briefly
 * the built-in structures in PHP in the form of the SPL.
 * 
 * In the next chapter, we are going to focus on the PHP array, one of the most
 * powerful, flexible data types in PHP. We will explore different uses of the
 * PHP array to implement different data structures such as hash tables, maps, structs
 * and so on.
 */