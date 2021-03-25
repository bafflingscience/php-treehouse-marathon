<?php

// $learn = array('Conditionals', 'Arrays', 'Loops');
// var_dump($learn);
// echo $learn[1];

/*
$ php treehouse-arrays.php 
array(3) {
  [0]=>
  string(12) "Conditionals"
  [1]=>
  string(6) "Arrays"
  [2]=>
  string(5) "Loops"
}
*/  
// echo $learn; // ERROR
// echo implode("\n",$learn); // Returns the array -->
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Hotpink is a nice color';
// $learn = 'Hotpink is nice';
// var_dump($learn);
array_push($learn, 'Functions', 'Forms', 'Objects');
//echo $learn; // NOTICE: ARRAY TO STRING CONVERSION
echo implode("\n", $learn);
echo "\n";
echo 'ya removed ' . array_shift($learn) . ' from the beginning of the array';
echo "\n";
echo 'ya removed ' . array_pop($learn) . ' from the end of the array';
echo "\n";

// unset can be used to destroy an entire array.
unset($learn[1], $learn[2]);

// the empty index keys values will be left empty after they are destroyed. 
// the array will not automatically re-index
// to reindex the array keys, use the array_values function
// creates a new array from the key values. 
// refreshes the array keys.
$learn = array_values($learn);

// To update a certain element in an array, you specify the key value of the element you would like to change
$learn[0] = 'MAIL';
echo $learn[0];



?>