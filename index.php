<?php

use App\stack;

require "vendor/autoload.php";

$stack = new \App\stack();

$stack->add('123');
$stack->add('abc');
$stack->add('555');

print_r($stack);
print_r($stack->remove());
print_r($stack->remove());
print_r($stack);

$stack->add('new wave');
print_r($stack);


