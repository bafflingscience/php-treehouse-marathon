<?php

// Comments to document steps

$time = 0;
$num = -2;
$name = 'Treehouse';
$bool = true;

echo "
<p>We have four variables. We need to determine which variable evaluates to FALSE when compared as a boolean. This program uses conditional statements and prints if each variable is the answer or not.</p><br>";

// var_dump($time);
// var_dump($num );
// var_dump($name);
// var_dump($bool);
// echo "\n";

if ( $num == false ) { 
  echo "\n" ."<p>NUM: <br> 
  NUM IS THE ANSWER.</p><br>";
} else {
  echo "<p>NUM: <br>
  num is not the answer</p><br>";
}

if ( $time == false ) {
  echo "<p>TIME:<br>
  <strong>TIME IS THE ANSWER!</strong></p><br>";
} else {
  echo "<p>TIME: <br> 
  time is not the answer.</p><br>";
} 

if ( $name == false) {
  echo "<p>NAME: <br> 
  NAME IS THE ANSWER. </p><br>";  
} else {
  echo "<p>NAME: <br>
  name is not the answer.</p><br>";
}

echo "
<p>  
<=====> [ -  +  -  +  - ] <=====> <br> 
<=====>  <======> <=====> <br> 
<br> but what does it all mean? <br>
<br> One line should print: 
<br> 'SOMEVARIABLE is the answer'.
<br> Two lines should print: 
<br> 'SOMENVARIABLE: is not the answer' 
<br> ...if that happens...
<br> then you know the script worked.
</p>";

echo 'I\'m not sleepy' . "\n";
echo "I\'m all jacked up on Mountain Dew and String Variables.\n";


// if ( $num == false ) { 
//   echo "\n" ."<p>NUM: <br> 
//   NUM IS THE ANSWER.</p><br>";
// } else {
//   echo "<p>NUM: <br>
//   num is not the answer</p><br>";
// }

// if ( $time == false ) {
//   echo "<p>TIME:<br>
//   <strong>TIME IS THE ANSWER!</strong></p><br>";
// } else {
//   echo "<p>TIME: <br> 
//   time is not the answer.</p><br>";
// } 

// if ( $name == false) {
//   echo "<p>NAME: <br> 
//   NAME IS THE ANSWER. </p><br>";  
// } else {
//   echo "<p>NAME: <br>
//   name is not the answer.</p><br>";
// }

// $name = '';
// $time = '12:30:00';
// $num = -1;
// $bool = true;

// var_dump($name);
// var_dump($time);
// var_dump($num);
// var_dump($bool);

// if ($name == false) {
//   echo "\nNAME es false";
// } else {
//   echo "NAME es true";
// } echo "\n";

// if ($time == false) {
//   echo "TIME es false";
// } else {
//   echo "TIME es true\n";
// }

// if ($bool == false) {
//   echo "BOOL is true";
// } else {
//   echo "BOOL es false\n";
// } 

// if ($num == false) {
//   echo "NUM es false";
// } else {
//   echo "NUM es true\n\n";
// }

// echo "$num\n";
// echo "$bool\n";
// echo "$time\n";
// echo "$name";
// echo "$string == false";

$a = 1;
if ($a > 1) {
  $a--;
  $a += 2;
} elseif ($a < 1) {
  $a++;
} else {
  $a += 5;
}
$a = $a + 2;
echo $a;
?>