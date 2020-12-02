<!-- Program to demonstrate Associative arrays. Display contents using foreach loop. -->
<?php

echo "<br>". "Displaying the contents of  Associative Arrays using foreach loop: ";
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

foreach ($ages as $item => $item_value)
	 echo "<br>". $item."".$item_value."<br>";
?>