<?php
require("dbconn.php");
$result = mysqli_query($conn , "SELECT * FROM comments ORDER BY id ASC");
while($row = mysqli_fetch_assoc($result)){
    echo"<div class='comments_content'>";

    //echo"<h6><a href='delete.php?id= " . $row['id'] ." 'class='fa fa-trash-o' style='font-size: 18px;color:white; 
   // background-color: red;padding:5px'></a></h6>";
    echo "<h4 style = 'font-size:20px;color : red;'>" .$row['name']. "</h4>";
    echo "<h6 style = 'color : black; margin-top:10px;'>".$row['date']. "</h6>";
  echo "<h3 style = 'color : black; font-size:14px;'>" .$row['comment']. "</h3>";
    echo"</div> <br>";
   
}

?>