<!-- Program to calculate factorial of a number using user-defined function -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>FACTORIAL</title>
</head>
<body>
	<form method="POST" action="">
		<p>Enter a number</p>
		<input type="text" name="x">
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php
    if(isset($_POST["x"]))
    {
    	$num=$_POST["x"];
        echo "FCATORIAL of $num is: ".factorial($num); 
    }
    	function factorial($x)
        {
            $fact=1;
            for ($i=1; $i<=$x; $i++) 
           { 
                $fact=$fact*$i;
                  
            }
            return ($fact);
        }

?>
