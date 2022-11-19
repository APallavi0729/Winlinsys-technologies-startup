<?php

$servername = "localhost";
 $username = "id17420490_winlintech";
 $password = "Anurag@0729#";
 $database = "id17420490_winlin";       

 
 $conn = mysqli_connect($servername, $username, $password,  $database);

 if($conn)
 {
	 echo"connection success";
 }
else{
	echo"connection failed due to......".mysqli_error($conn);
}
?>
