<?php

// Comments to document steps

$time = 0;
$num = -2;
$name = 'Treehouse';
$bool = true;


echo "
We have four variables.  
We need to determine which variable evaluates to FALSE when compared as a boolean.
This program uses conditional statements and prints if each variable is the answer or not.";

// var_dump($time);
// var_dump($num );
// var_dump($name);
// var_dump($bool);
// echo "\n";

if ( $num == false ) { 
  echo "NUM: 
  NUM IS THE ANSWER.";
} else {
  echo "NUM: 
  num is not the answer";
} echo "\n\n";

if ( $time == false ) {
  echo "TIME:
  TIME IS THE ANSWER!";
} else {
  echo "TIME: 
  time is not the answer.";
} echo "\n\n";

if ( $name == false) {
  echo "NAME: 
  NAME IS THE ANSWER.";  
} else {
  echo "NAME:
  name is not the answer.";
  echo "\n\n";
}
echo "-----------------------\n";
echo "What does it all mean??\n\n";
echo "One line should print: 
'SOMEVARIABLE: is the answer'.

Two lines should print:
'SOMENVARIABLE: is not the answer'

...if that happens...
then you know the script worked.";

?>