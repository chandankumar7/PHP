<!-- Create 3 arrays one indexed, one associative and one multidimensional. Display their contents using print_r() method. -->

<?php

echo "Displaying  Using Indexed Arrays: ";
$colors = array("Red", "Green", "Blue");
print_r($colors);
echo "<br>";



echo "<br>". "Displaying  Using Associative Arrays: ";
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
print_r($ages);
echo "<br>";


echo "<br>". "Displaying  Using Multidimensional Arrays: ";
$contacts = array(array("name" => "Peter Parker", "email" => "peterparker@mail.com",),
                  array("name" => "Clark Kent", "email" => "clarkkent@mail.com",),
                  array("name" => "Harry Potter","email" => "harrypotter@mail.com",)
                 );
print_r($contacts);

?>