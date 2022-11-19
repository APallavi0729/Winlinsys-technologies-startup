<?php 
require("dbconn.php");
header('Content-Type : application/json');
$json[];
try{
    if(isset($_POST['name']) && (!empty($_POST['name']))){
        if(isset($_POST['comment']) && (!empty($_POST['comment']))){
            mysqli_query($conn , "INSERT INTO comments(name, comment)
            VALUES('" .$_POST['name']."','" .$_POST['comment']."')"); 
            $json = ['success'=> TRUE, 'message'=> 'Insert Data successfully'];
    }
}else{
    $json = ['error' => TRUE, 'message' => 'Not Inser Data..'];
}
}
catch(Exception $ex){
    $json =['error' => TRUE , 'message' => $ex -> getMessage()];
}
echo_json_encode($json);
?>