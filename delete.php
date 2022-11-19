<?php
require("dbconn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn , "DELETE FROM comments WHERE id= '$id'");
    $message = "comment deleted successfully...";
    header("location: index.php?message =" .$message."");
}
mysqli_close($conn);


?>