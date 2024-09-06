<?php
//simple array
$numbers = [1,26,377,48];
$fruits = array('apple', 'orange', 'pear', 'strawberry');

print_r ($numbers);
//var_dump ($fruits);//prints out the length of the array, the position (index) of each element and the length of each element in the array

echo $fruits[3];//print particular element with the index.

//Associative array
 $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',

 ];

 echo $hex['blue'];

 //another example
 $person = [
    'first_name' => 'Ama',
    'last_name' => 'Williams',
    'email' => 'amani@test.com',

 ];

//multidimensional arrays (nested arrays)
$people = [
    ['first_name' => 'Ama',
    'last_name' => 'Williams',
    'email' => 'amani@test.com'],

    ['first_name' => 'Frank',
    'last_name' => 'Williams',
    'email' => 'frank@test.com'],

    ['first_name' => 'Tim',
    'last_name' => 'Williams',
    'email' => 'tim@test.com']

 ];
 echo $people[1]['email'];
 var_dump (json_encode($people));//print out the array as JSON
?>
