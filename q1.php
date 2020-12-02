<!-- Program to print the day of the week corresponding to a number. (if-elseif-else). -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>if-elseif-else</title>
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

        if($num==1)
        {
            echo "Monday";
        }
        else if ($num==2) 
        {
            echo "Tuesday";
        }
        else if ($num==3) 
        {
            echo "Wednesday";
        }
        else if ($num==4) 
        {
            echo "Thursday";
        }
        else if ($num==5) 
        {
            echo "Friday";
        }
        else if ($num==6) 
        {
            echo "Saturday";
        }
        else if ($num==7) 
        {
            echo "Sunday";
        }
        else{
            echo "Invalid Input! Please enter week number between 1-7.";
        }
   }
    
?>
