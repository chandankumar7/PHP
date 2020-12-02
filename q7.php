<!-- Program to demonstrate recursion. -->
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
           if($x==0)
            return 1;
           else
            return ($x*factorial($x-1));
        }

?>
