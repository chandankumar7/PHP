<!-- Program to demonstrate Multi-dimensional array. Display contents using nested for loops.-->
<?php
$marks=array(
	          array(80,89,79),
	          array(90,78,87),
	          array(78,90,78)
           );

echo "<b>marks array displayed using nested for loop:</b><br>";
for($i=0;$i<count($marks);$i++)
{
	for($j=0;$j<count($marks[$i]);$j++)
	{
		echo $marks[$i][$j]."   ";
	}
	echo "<br>";
}