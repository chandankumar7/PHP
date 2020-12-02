<!-- Program to demonstrate Array Iterator concept. -->
<?php
$fruits = array(
                 "apple" => "yummy Apple juice",
                 "orange" => "ah ya, nice orange juice",
                 "grape" => "wow, I love grape jam!",
                 "plum" => "nah, I don't like it!"
               );

$iterator = new ArrayIterator($fruits);
$iterator->rewind();//rewind to the begining of the array

while ($iterator->valid())
 {
	print "<h1>". $iterator->key()."=".$iterator->current()."<br>"."</h1>";
	$iterator->next();
}
?>