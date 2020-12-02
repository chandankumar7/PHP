<!-- Program to demonstrate call-back function. -->
<?php
   function f1($a)
   {
   	 echo "<h1>"." f1 function exectuing on ".$a."</h1>";
   }

   function f2($a)
   {
   	   echo "<h1>". "f2 function exectuing on ".$a."</h1>";
   
   }

 function display($a ,$b)
 {
 	$a("Computer");
 	$b("Department");
 }

 display("f1","f2");
?>