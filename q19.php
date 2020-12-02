<!-- Program to copy the contents of one file to another file. -->
<?php   

$f1=fopen("f1.txt","r") or die("Unable to open file");
echo "file f1.txt opened successfully"."</br>";
$f2=fopen("f2.txt","r") or die("Unable to open file");
echo "file f2.txt opened successfully"."</br>";


echo copy("f1.txt","f2.txt")."<br>";
echo "<br>"." File copied successfully"."<br>"."<br>";
echo "The context of file f1.txt is: "."<br>";
while (!feof($f1)) 
{
	$data=fgets($f1);
	echo $data."<br>";
}

echo "The context of copied  file f2.txt is: "."<br>";
while (!feof($f2)) 
{
	$data1=fgets($f2);
	echo $data1."<br>";
}


fclose($f1);
fclose($f2);

?>