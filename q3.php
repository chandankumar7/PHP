<!-- Program to calculate and display squares of 1st
6 odd numbers using a loop. Also display the sum of 
1st 6 odd numbers and sum of their squares. -->
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>SQUARES</title>
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
        $sum=0;
        $sum_of_square=0;

      
     for($i=1;$i<=$num;$i++)
     {
            $b=2*$i-1;
            echo "<br>"." ".$b;
            $c=$b*$b;
            $sum_of_square=$sum_of_square+$c;
            echo "<-------->".$c;
            $sum=$sum+$b;
            // $c=$i+2;
            // echo "<br>"." ".$i*$c;
     }
      echo "<br>"."The Sum  of 1st ".$num." odd number : ".$sum;
      echo "<br>"."The Sum  of Squares of 1st ".$num." odd number : ".$sum_of_square;
   }
    
?>
