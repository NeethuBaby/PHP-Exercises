<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["rice", "burger", "pizza","soup"];
/*
Print every array element in a new line.
*/

echo '$food[0] <br>';

echo '$food[1] <br>';

echo '$food[2] <br>';

echo '$food[3] <br>';




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
/*"<ul>
  <li>$food[0]$food[0]</li>
  <li>$food[1]</li>
  <li>$food[2]$food[0]</li>
  <li>$food[3]</li>
</ul>"*/
echo "<ul>";
echo "<li>" . $food[0] . "</li>";
echo "<li>" . $food[1] . "</li>";
echo "<li>" . $food[2] . "</li>";
echo "<li>" . $food[3] . "</li>";
echo "</ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
  "rice" => "main course",
  "burger" => "main course",
  "pizza" => "main course",
  "soup" => "starter"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo "rice" . " "  .  "|" . " " .  "main course";
echo "<br>";
echo "burger". " " . "|" . " " . "main course";
echo "<br>";
echo "pizza" . " " . "|" . " " . "main course";
echo "<br>";
echo "soup" . " " . "|" . " " . "starter";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
  "rice" => [
    "type" => "main course",
    "origin" => "India"
  ],
  "burger" => [
    "type" => "main course",
    "origin" => "America"
  ],
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "soup" => [
    "type" => "starter",
    "origin" => "China"
  ]  
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo "rice" . " "  .  "|" . " " .  "main course" .  " " . "|" . " " . "India";
echo "<br>";
echo "burger". " " . "|" . " " . "main course" .  " " . "|" . " " . "America";
echo "<br>";
echo "pizza" . " " . "|" . " " . "main course" .  " " . "|" . " " . "Italy";
echo "<br>";
echo "soup" . " " . "|" . " " . "starter" .  " " . "|" . " " . "China";

/*$food_assoc["rice"] . " "  .  "|" . " " .  ["main course"] .  " " . "|" . " " . "India";
echo "<br>";
$food_assoc["burger"] . " "  .  "|" . " " .  ["main course"] .  " " . "|" . " " . "America";
echo "<br>";
$food_assoc["pizza"] . " "  .  "|" . " " .  ["main course"] .  " " . "|" . " " . "Italy";
echo "<br>";
$food_assoc["soup"] . " "  .  "|" . " " .  ["main course"] .  " " . "|" . " " . "China";*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>" . $food[0] . "</td>
    <td>" . $food_assoc["rice"]["type"] ."</td>
    <td>" . $food_assoc["rice"]["origin"] ."</td>
  </tr>
    <tr>
    <td>" . $food[1] . "</td>
    <td>" . $food_assoc["burger"]["type"] ."</td>
    <td>" . $food_assoc["burger"]["origin"] ."</td>
  </tr>
    <tr>
    <td>" . $food[2] . "</td>
    <td>" . $food_assoc["pizza"]["type"] ."</td>
    <td>" . $food_assoc["pizza"]["origin"] ."</td>
  </tr>
    <tr>
    <td>" . $food[3] . "</td>
    <td>" . $food_assoc["soup"]["type"] ."</td>
    <td>" . $food_assoc["soup"]["origin"] ."</td>
  </tr>
</table>";

?>