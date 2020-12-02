<!-- Program to read and display the contents of a file. -->
<?php
     
$fp=fopen("text1.txt","r") or die("Unable to open file");
echo "file opened successfully"."</br>";

while (!feof($fp)) 
{
	$data=fgets($fp,512);
	echo $data."<br>";
}
 fclose($fp) or die("Unable to close the file");
 echo "</br>"."file closed successfully";

?>