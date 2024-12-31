<?php 

 include 'databaseConnect.php';


//super global variable

 $recv = $_GET['Post_No'];


 $query = "DELETE FROM blog_post WHERE Post_No ='" . $_GET["Post_No"] ."'";

// $query = "DELETE FROM blog_post WHERE Post_No ='4'";

//to run delete query
// $result = mysqli_query($connect,$query);

if(mysqli_query($connect,$query)){
    // header("location: alldata.php");
    echo "Success";
}else{
    echo "can't delete user.";
}

?>