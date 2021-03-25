<?php

/*
In the code below, we have a simple array of contact names.

use the $contacts array to fill in the hardcoded list of names and email addresses.

To hold BOTH the email as well as the name for each contact, we need a multidimensional array.

Each person in the contact list will have their own inner array.

The inner array will be an associative array of name and email.

STEP 1. 
Add a second inner array to the $contacts array.

Instead of each value being a string containing a name,

each value should be an ASSOCIATIVE array.

Use the string 'name' as the key

their actual name as the value for these internal arrays.
 */

/*There should be multiple arrays within an array. The outermost array should be 0 indexed. Example: $contacts = array(array('name'=>'Alena Holligan'));*/

// CONTACT ARRAY(NAME ARRAY(0,1,2,3), EMAIL ARRAY(0,1,2,3) )


//edit this array

$contacts = array('Alena Holligan', 'Dave McFarland', 'Treasure Porth', 'Andrew Chalkley');

//$contacts[0] will return 'Alena Holligan' in our simple array of names.
// echo "<ul>\n";
// echo "<li>Alena Holligan : alena.holligan@teamtreehouse.com</li>\n";
// echo "<li>Dave McFarland : dave.mcfarland@teamtreehouse.com</li>\n";
// echo "<li>Treasure Porth : treasure.porth@teamtreehouse.com</li>\n";
// echo "<li>Andrew Chalkley : andrew.chalkley@teamtreehouse.com</li>\n";
// echo "</ul>\n";


// $contacts[] = ['name' => 'Alena Holligan'];
// $contacts[] = ['name' => 'Dave McFarland'];
// $contacts[] = ['name' => 'Treasure Porth'];
// $contacts[] = ['name' => 'Andrew Chalkley'];

// Challenge Task 2 of 3
// Add a second element with the key 'email' to the internal array of each person. 
// You'll find the correct email for each person in the hard coded output.

$contacts[] = ['name' => 'Alena Holligan','email' => 'alena.holligan@teamtreehouse.com',];
$contacts[] = ['name' => 'Dave McFarland','email' => 'dave.mcfarland@teamtreehouse.com',];
$contacts[] = ['name' => 'Treasure Porth','email' => 'treasure.porth@teamtreehouse.com',];
$contacts[] = ['name' => 'Andrew Chalkley','email' => 'andrew.chalkley@teamtreehouse.com'];

// CHALLENGE TASK 3 OF 3
// Replace the hard coded values in the output with the name and email values from the contacts array.
/* 
I do not see the use of the names from contacts array in the output. 
When calling the multidimensional array, 
you must first call the outer indexed array and then the inner associative array. 
Example: $array[#][STRING]
*/

echo "<ul>\n";
echo "<li>" . $contacts[0]['name'] . ' : ' . $contacts[0]['email'] . "</li>\n";
echo "<li>" . $contacts[1]['name'] . ' : ' . $contacts[1]['email'] . "</li>\n";
echo "<li>" . $contacts[2]['name'] . ' : ' . $contacts[2]['email'] . "</li>\n";
echo "<li>" . $contacts[3]['name'] . ' : ' . $contacts[3]['email'] . "</li>\n";
echo "</ul>\n";

?>