<!-- Program to demonstrate Numerical/Indexed arrays. Display contents using for loop. -->
<?php

$names = array("Rohan", "Karan", "Ben");
// find size of the array
$size = count($names);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo "<h1>".$names[$i], "\n"."</h1>";
}

?>