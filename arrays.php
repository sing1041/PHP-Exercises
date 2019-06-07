<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Noodles", "Dosa", "Fries", "Ice Cream"];

/*
Print every array element in a new line.
*/

$size = sizeOf($food);
    
for($i=0; $i<$size; $i++)
{
    echo $food[$i]."<br>";
}

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

echo "<ul>";  
for($i=0; $i<$size; $i++)
{
    echo"<li>".$food[$i]."</li>";
}
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

$food_assoc = ["Noodles" => "Snacks",
               "Dosa" => "Main Course",
               "Fries" => "Starter",
               "Ice Cream" => "Desert"];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $key => $value)
{   
    echo $key."  |  ".$value."<br>";
}


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

$food_assoc = ["Noodles" => ["type"=>"Snacks", "origin"=>"China"],
               "Dosa" => ["type"=>"Main Course", "origin"=>"South India"],
               "Fries" => ["type"=>"Starter", "origin"=>"France"],
               "Ice Cream" => ["type"=>"Desert", "origin"=>"America"]];
    
    
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
               
foreach($food_assoc as $key => $value)
{   
    echo $key."  |  ".$value['type']."  |  ".$value['origin']."<br>";
}





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
    </tr>";

    
    
foreach($food_assoc as $key => $value)
{   
    echo "<tr><td>" .$key."</td><td>".$value['type']."</td><td>".$value['origin']."</td></tr>";
        
}
echo "</table>";
    

    
    

?>
