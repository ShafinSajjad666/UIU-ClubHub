<?php

$connect = mysqli_connect("localhost", "root", "", "uiu_clubhub") or die("Connection Failed");
//include database_connect.php;
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    
    $password = $_POST['password'];
    //echo $password;
    $query = "SELECT * FROM `login_page` WHERE s_id = '$id' and password = '$password'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    if($count == 1){
        //header("location: connect.php"); 
        echo"Login Successful";
    }
    else{
        echo"Login failed!";
    }
}
?>