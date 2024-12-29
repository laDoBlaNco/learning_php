<?php
// Write a php script that creates and displays a random word consisting
// of five letters. The first letter must be a capital letter.
$alpha = 'abcdefghijklmnopqrstuvwxyz';

echo strtoupper($alpha[rand(0,25)]).$alpha[rand(0,25)].$alpha[rand(0,25)].$alpha[rand(0,25)].$alpha[rand(0,25)],"\n";