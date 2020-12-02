<!-- Program to demonstrate pass by reference parameter passing. -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
    <title>FACTORIAL</title>
</head>
<body>
    <form method="POST" action="">
        <p>Enter a number1</p>
         <input type="text" name="x">
         <p>Enter a number2</p>
         <input type="text" name="y">
        <input type="submit" value="submit">
    </form>
</body>
</html>




<?php

    function swap(&$a, &$b)
    {
       echo "<h1>"."Inside function before swapping: a=$a b=$b"."<br>"."</h1>";
       $temp=$a;
       $a=$b;
       $b=$temp;
       echo "<h1>"."Inside function after swapping: a=$a b=$b"."<br>"."</h1>";
    }

    if(isset($_POST["x"])&& isset($_POST["y"]))
    {
         $a=$_POST["x"];
         $b=$_POST["y"];
         echo "<h1>"."Before calling function : a=$a b=$b"."<br>"."</h1>";
         swap($a, $b);//function call
         echo "<h1>"."After calling function : a=$a b=$b"."<br>"."</h1>";
    }
// $a=10;
// $b=20;
?>