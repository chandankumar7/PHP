<!-- Program to print the day of the week corresponding to a number. (switch-case). -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>SWITCH CASE</title>
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

        switch ($num) {
            case 1:echo "<h1>"."Monday"."</h1>";    break;
            case 2:echo "<h1>"."Tuesday"."</h1>";   break;
            case 3:echo "<h1>"."Wednesday"."</h1>"; break;
            case 4:echo "<h1>"."Thursday"."</h1>";  break;
            case 5:echo "<h1>"."Friday"."</h1>";    break;
            case 6:echo "<h1>"."Saturday"."</h1>";  break;
            case 7:echo "<h1>"."Sunday"."</h1>";    break;
            default:echo "<h1>"."Invalid Input! Please enter week number between 1-7."."</h1>"; break;
        }
    }
?>
