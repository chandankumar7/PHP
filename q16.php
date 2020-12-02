<!-- Program to display date and time. -->
<?php 
  $today = date("d/m/Y"); 
  echo "<h1>"."Today's date is :".$today."</h1>"; 

date_default_timezone_set("Asia/Calcutta");
// echo "<h1>". "The time in " . date_default_timezone_get() . " is : " . date("h:i:s a")."</h1>";
echo "<h1>"."Time is: ".(date (" h: i: s a")." ")."</h1>";




// echo date ("l")."<br>";
// echo (date ("l dS \of F Y h: i: s a")." ");
  
?> 