<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/
$food = [
    "Pasta", "Pizza", "Coffee", "Burger"
];
  /*  echo "<pre>";
    print_r($food);
    echo "</pre>";
*/
echo "$food[0]<br>";
echo "$food[1]<br>";
echo "$food[2]<br>";
echo "$food[3]<br>";


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

$list = "<ul>
    <li>{$food[0]}</li>
    <li>{$food[1]}</li>
    <li>{$food[2]}</li>
    <li>{$food[3]}</li>
    </ul>";

echo $list;

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
   "pasta" => "appetizer",
    "pizza" => "Main course",
    "coffee" => "Drink",
    "burger" => "Food"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo "pasta  | {$food_assoc ['pasta'] }<br>";
echo "pizza  | {$food_assoc ['pizza'] }<br>";
echo "coffee  | {$food_assoc ['coffee'] }<br>";
echo "burger  | {$food_assoc ['burger'] }<br>";




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
   "pasta" => ["type"=>"appetizer"],
    "pizza" => "Main course",
    "coffee" => "Drink",
    "burger" => "Food"
];

$pasta = [
    "type" => "appetizer",
    "country" => "Italy"
];

$pizza = [
    "type" => "main course",
    "country" => "Italy"
];

$coffee = [
    "type" => "drink",
    "country" => "America"
];

$burger = [
    "type" => "main course",
    "country" => "America"
];

$food_assoc = [
    "pasta" => $pasta,
    "pizza" => $pizza,
    "coffee" => $coffee,
    "burger" => $burger
    
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "pasta | {$food_assoc["pasta"]["type"]} | {$food_assoc["pasta"]["country"]} <br>";
echo "pizza | {$food_assoc["pizza"]["type"]} | {$food_assoc["pizza"]["country"]} <br>";
echo "coffee | {$food_assoc["coffee"]["type"]} | {$food_assoc["coffee"]["country"]} <br>";
echo "burger | {$food_assoc["burger"]["type"]} | {$food_assoc["burger"]["country"]} <br>";


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
    <td>pizza</td>
    <td>{$food_assoc["pizza"]["type"]}</td>
    <td>{$food_assoc["pizza"]["country"]}</td>
  </tr>
  <tr>
    <td>pasta</td>
    <td>{$food_assoc["pasta"]["type"]}</td>
    <td>{$food_assoc["pasta"]["country"]}</td>
  </tr>
  <tr>
    <td>burger</td>
    <td>{$food_assoc["burger"]["type"]}</td>
    <td>{$food_assoc["burger"]["country"]}</td>
  </tr>
  <tr>
    <td>coffee</td>
    <td>{$food_assoc["coffee"]["type"]}</td>
    <td>{$food_assoc["coffee"]["country"]}</td>
  </tr>
</table>";
?>