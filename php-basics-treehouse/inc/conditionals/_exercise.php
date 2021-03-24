<?php
// store each exercise in string variable
$exercise1 = '"';
$exercise1 = 'if/elseif/else Control Structures';
$exercise2 = 'Arrays';
$exercise3 = 'CSS';
$exercise4 = 'Functions';
$exercise5 = 'String Manipulation"';
$exercise6 = 'Dates';
$exercise7 = 'Display "Hello World!"';

// create a variable containing the day of the week
$day = date('N'); // number of day of week

// use if statement to test for the day of the week
if ($day == 1) {
  echo $exercise1;
} elseif ($day == 2) {
  echo $exercise2;
} elseif ($day == 3) {
  echo $exercise3;
} elseif ($day == 4) {
  echo $exercise4;
 } elseif ($day == 5) {
   echo $exercise5;
 } elseif ($day == 6) {
   echo $exercise6;
 } elseif ($day == 7) {
   echo $exercise7;
 } else {
   echo "No";
}

?>