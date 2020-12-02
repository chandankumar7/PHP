<!-- Program to demonstrate all 6 string functions. -->
<?php

//1-strlen function//
echo "<b>"."Using 1-strlen function"."<br>";
$x="Hello world!";
echo "The string is: ".$x."<br>";
echo "The length of string is :".strlen($x)."<br>"."<br>";

//2-EXPLODE function
echo "<b>"."Using 2-EXPLODE function"."<br>";
$y="ALL MENS ARE TREATED EQUALLY BUT ONLY THE BEST BECOMES ENGINEERS!";
echo "The string is: ".$y."<br>";
$a=explode(" ",$y);
echo $a[0]."<br>";
echo $a[1]."<br>";
echo $a[2]."<br>";
echo $a[3]."<br>"."<br>";

//3-Implode function
echo "<b>"."Using 3-Implode function"."<br>";
$string=array('APPLE','MANGO','BANANA');
print_r($string);
$b=implode("*",$string);
echo "<br>".$b."<br>"."<br>";

//4-strpos function
echo "<b>"."Using 4-strpos function"."<br>";
$str="PHP solution Manual";
echo "The string is: ".$str."<br>";
echo "The position of Ma in PHP solution Manual is: ".strpos($str, "Ma")."<br>"."<br>";

//5-str_repeat function
echo "<b>"."Using 5-str_repeat function"."<br>";
$str="BOB";
echo "The string is: ".$str."<br>";
echo str_repeat($str, 5)."<br>"."<br>";

//6-strrev function
echo "<b>"."Using 6-strrev function"."<br>";
$s="Hello world!";
echo "Before Reversal the sting is : ".$s."<br>";
echo "After Reversal the string is :".strrev("Hello world!")."<br>";
		

?> 