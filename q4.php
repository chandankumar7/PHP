<!-- Program to display multiplication table of a number. Accept user input. -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>MULTIPLICATION TABLE</title>
	</style>
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
    	echo "*****The multiplication table of ".$num." is ******:<br>" ;
    	for ($i=1; $i<=10; $i++) 
    	{ 
    		echo "$num*$i=".$num*$i."<br>";	
    	}

    }
?>
