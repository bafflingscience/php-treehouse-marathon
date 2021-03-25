<?php

// $task1 = array(
//   'title' => 'Laundry',
//   'priority' => 2,
//   'due' => '',
//   'complete' => true
// );

// $task2 = array(
//   'title' => 'Clean fridge',
//   'priority' => 3,
//   'due' => '05/30/2024',
//   'complete' => false
// );
// $list = array($task1, $task2);
// var_dump($list);

/*
array(2) {
  [0]=>
  array(4) {
    ["title"]=>
    string(7) "Laundry"
    ["priority"]=>
    int(2)
    ["due"]=>
    string(0) ""
    ["complete"]=>
    bool(true)
  }
  [1]=>
  array(4) {
    ["title"]=>
    string(12) "Clean fridge"
    ["priority"]=>
    int(3)
    ["due"]=>
    string(10) "05/30/2024"
    ["complete"]=>
    bool(false)
  }
}
*/

// echo $list[0]['title']; // Laundry

// NOW ADD ITEMS TO LIST FROM TWO TASK LIST ARRAYS ABOVE 
$list[] = array(
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,
);

$list[] = array(
    'title' => 'Clean fridge',
    'priority' => 3,
    'due' => '05/30/2024',
    'complete' => false,
);

// THE SHORTER SYNTAX TO ACCOMPLISH THE SAME THING
// OFTEN USED IN MULTIDIMENSIONAL ARRAYS

$list[] = [
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,
];

$list[] = [
    'title' => 'Clean fridge',
    'priority' => 3,
    'due' => '05/30/2024',
    'complete' => false,
];

var_dump($list);

// YOU CAN SPECIFY A KEY FOR EACH ARRAY LIKE SO:

$list['Task 1'] = [
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,
];

$list['Task 2'] = [
    'title' => 'Clean fridge',
    'priority' => 3,
    'due' => '05/30/2024',
    'complete' => false,
];

var_dump($list);
/*
  }
  ["Task 1"]=>
  array(4) {
    ["title"]=>
    string(7) "Laundry"
    ["priority"]=>
    int(2)
    ["due"]=>
    string(0) ""
    ["complete"]=>
    bool(true)
  }
  ["Task 2"]=>
  array(4) {
    ["title"]=>
    string(12) "Clean fridge"
    ["priority"]=>
    int(3)
    ["due"]=>
    string(10) "05/30/2024"
    ["complete"]=>
    bool(false)
  }
*/

?>