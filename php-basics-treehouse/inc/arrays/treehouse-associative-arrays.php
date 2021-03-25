<?php

// ASSOCIATIVE ARRAYS

// Array Keys and Key Casting
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array);

$iceCream = array(
    'Alena'       => 'Black Cherry', 
    'Dave'        => 'Cookies and Cream',
    'Treasure'    => 'Chocolate',
    'Rialla'      => 'Strawberry'
);

$iceCream = [
    'Alena'    => 'Black Cherry', 
    'Dave'     => 'Cookies and Cream',
    'Treasure' => 'Chocolate',
    'Rialla'   => 'Strawberry'
];

$iceCream['alena'] = 'Pistachio';
$iceCream['Dave Thomas'] = 'Cookie Dough';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;

var_dump($iceCream);

/* 
array(6) {
  ["Alena"]=>
  string(12) "Black Cherry"
  ["Dave"]=>
  string(12) "Cookie Dough"
  ["Treasure"]=>
  string(9) "Chocolate"
  ["Rialla"]=>
  string(10) "Strawberry"
  ["alena"]=>
  string(9) "Pistachio"
  [0]=>
  string(7) "Vanilla"
}
*/


$keys = array(
    1    => 'a',
    '1'  => 'b',
    1.5  => 'c',
    true => 'd'
);

var_dump($keys);
/*
array(1) {
  [1]=>
  string(1) "d"
}
*/

#
?>