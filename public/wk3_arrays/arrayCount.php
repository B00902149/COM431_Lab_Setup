<?php
header("Content-Type: text/plain");

// This is a php array of 10 elements that contains ints, floats, strings, booleans, and objects
$array = array();
for ($i = 0; $i < 10; $i++) {
  // Generate a random type for each element
  $type = mt_rand(1, 5);
  switch ($type) {
    case 1:
      // int
      $array[$i] = mt_rand(-1000, 1000);
      break;
    case 2:
      // float
      $array[$i] = mt_rand(-1000, 1000) / 10.0;
      break;
    case 3:
      // string
      $array[$i] = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, mt_rand(1, 10));
      break;
    case 4:
      // boolean
      $array[$i] = (bool)mt_rand(0, 1);
      break;
    case 5:
      // object
      $array[$i] = new stdClass();
      $array[$i]->name = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, mt_rand(1, 10));
      $array[$i]->age = mt_rand(1, 100);
      break;
  }
}
// Print the array
var_dump($array);

//Pseudocode part - rewrite as PHP 

// Initialize an array of five zeros
counts = [0, 0, 0, 0, 0]

// Loop through each element in the array
for element in array:

    // Check the type of the element and increment the corresponding count
    if type(element) == int:
        counts[0] += 1
    elif type(element) == float:
        counts[1] += 1
    elif type(element) == str:
        counts[2] += 1
    elif type(element) == bool:
        counts[3] += 1
    elif type(element) == object:
        counts[4] += 1

// Print the number of each type created
print(f"Number of ints created: {counts[0]}")
print(f"Number of floats created: {counts[1]}")
print(f"Number of strings created: {counts[2]}")
print(f"Number of booleans created: {counts[3]}")
print(f"Number of objects created: {counts[4]}")


?>