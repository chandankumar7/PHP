<!-- Program to demonstrate file locking mechanism. -->
<?php

	$fp=fopen("p1.txt","w+");
	if(flock($fp,LOCK_EX))//applyng exclusive lock
	{
        fwrite($fp,"Chandan");
        flock($fp,LOCK_UN);
        echo "Successful";
	}
    else
    {
    	echo "<br>"."could not lock the file";
    }
    fclose($fp);
?>