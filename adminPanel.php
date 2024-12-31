<?php
session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];


if (!empty($user_name) && !empty($user_id)) {
?>


<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>UIU ClubHub</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
<!--        <link rel="stylesheet" href="css/adminPanel.css">-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/alldata.css">
    </head>

    <body>
    <!-- <header id="navigation">
            <div class="navigation_scroll">
                <nav class="navbar navbar-expand-md p-0">
                    <div class="container p-0">
                        <a href="#" class="navbar-brand">
                            <img src="images/Logo-Green.png" class="img-fluid" alt="logo">
                        </a>
                        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#myMenuToggler">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="myMenuToggler">
                            <ul class="navbar-nav ml-auto p-0">
                                <li class="nav-item">
                                    <a href="#navigation" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#gallery" class="nav-link">Our Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#service" class="nav-link">Our Clubs & Forums</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blogposts.php" class="nav-link">Blog posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#team" class="nav-link">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="profile.php" class="nav-link active">Profile (<?php echo $_SESSION['s_name'] ?>)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header> -->


        <div class="admin_page_Button">
            <div class="container">
                <a href="MemberApprove.php" class=".center">Approve Members</a>
                <a href="blogpostApprove.php" class=".center">Approve Blog Posts</a>
                <a href="alldata.php" class=".center">See all data</a>
            </div>
        </div>
    </body>
    
</html>

    

<?php

} else {
    header('location:login.php');
}
?>

