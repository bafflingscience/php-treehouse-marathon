<?php

// $winter = array("December", "January", "February");
// $spring = array("March", "April", "May");
// $summer = array("June", "July", "August");
// $fall = array("September", "October", "November");
// $seasons = array(
//   "Winter" => $winter, 
//   "Spring" => $spring, 
//   "Summer" => $summer, 
//   "Fall" => $fall
// );

//print_r(array_keys($fall));

// $colors = array(
//   "Red", 
//   "Orange", 
//   "Yellow", 
//   "Green", 
//   "Blue", 
//   "Purple", 
//   "Black"
// );
// ksort r, o, y,...
// krsort 
// [6] => black 
// [5] => purple
// [4] => blue 
// [3] => green
// [2] => yell
// [0] => red


// asort($colors); 
// print_r($colors);
// print_r(array_keys($colors));

// arsort($colors);
//  Bummer! The LAST element will be "Yellow"	
// echo "ASorted:\n";
// print_r($colors);

// arsort($colors);
// echo "ARSorted:\n";
// print_r($colors);

// krsort($colors);
// echo "KRSorted:\n";
// print_r($colors);

// ksort($colors);
// echo "KSorted:\n";
// print_r($colors);

// QUESTION:
// What is the first element in the array?
// ANSWER:
// "d"
$gayray = array(
    0 => "a",
    "0" => "b",
    .5 => "c",
    false => "d",
);

echo reset($gayray);
var_dump($gayray);  // "d"

// Quiz Question 5 of 5
// How would I access "March" using the $seasons array?
// March
$winter = array("December", "January", "February");
$spring = array("March", "April", "May");
$summer = array("June", "July", "August");
$fall = array("September", "October", "November");
$seasons = array("Winter" => $winter, "Spring" => $spring, "Summer" => $summer, "Fall" => $fall);

echo $seasons["Spring"][0]; // March
?>