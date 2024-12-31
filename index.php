<?php
session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];


if (!empty($user_name) && !empty($user_id)) {

    include('databaseConnect.php');

    $sql1 = "SELECT count(s_id) as studentNum
                FROM student";

    $result = mysqli_query($connect, $sql1);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $stdntNum = $data['studentNum'];
    }
    $sql2 = "SELECT count(club_id) as clbNum
            FROM club";

    $result = mysqli_query($connect, $sql2);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $clbNum = $data['clbNum'];
    }

    $sql3 = "SELECT count(m_id) as membrNum
            FROM members";

    $result = mysqli_query($connect, $sql3);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $membrNum = $data['membrNum'];
    }

    $sql4 = "SELECT count(f_id) as fcltyNum
            FROM faculty";

    $result = mysqli_query($connect, $sql4);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $fcltyNum = $data['fcltyNum'];
    }

    $sql5 = "SELECT count(a_id) as admnNum
            FROM admin";

    $result = mysqli_query($connect, $sql5);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $admnNum = $data['admnNum'];
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>UIU ClubHub</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/venobox.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>
        <!--==============================================================================-->

        <header id="navigation">
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
                                    <a href="#navigation" class="nav-link active">Home</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="#about" class="nav-link">About Us</a>
                                </li> -->
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
                                    <a href="profile.php" class="nav-link">Profile (<?php echo $_SESSION['s_name'] ?>)</a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- navigation ends ===============================-->

        <section id="banner">
            <div class="banner_slide">

                <div class="slide_item item1">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text">
                                        <h2>Quest for excellence</h2>
                                        <h1>UIU ClubHub</h1>
                                        <p>A students community made by the students made for the students</p>
                                        <a href="#service">View more</a>
                                        <!--                                <a href="#">Hire us</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide_item item2">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text">
                                        <h2>Quest for excellence</h2>
                                        <h1>UIU ClubHub</h1>
                                        <p>A students community made by the students made for the students</p>
                                        <a href="#service">View more</a>
                                        <!--                                <a href="#">Hire us</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide_item item3">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text">
                                        <h2>Quest for excellence</h2>
                                        <h1>UIU ClubHub</h1>
                                        <p>A students community made by the students made for the students</p>
                                        <a href="#service">View more</a>
                                        <!--                                <a href="#">Hire us</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- banner ends ===================================-->
        <!-- search box starts here -->
        <section id="search">
            <div class="container">
                <div class="search_bar">
                    <input type="text" placeholder="">
                    <a href="search.php">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- Search box ends here -->
        <!-- <section id="about">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="common_heading">
                            <h2>About Us</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the industry's standard dummy text ever since the end of 1500s.</p>
                        </div>
                    </div>
                </div>

                
                <div class="row d-md-none">
                    <div class="col-6 offset-3">
                        <div class="outside_circle">
                            <div class="image_circle">
                                <img src="images/about-circle.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 col-md-4 offset-md-4 text-center">
                        <div class="text  top_side">
                            <h3>Who we are?</h3>
                            <p>Lorem Ipsum is simply dummy text oftheg and typesetting industry. Loremumhaseen the industry's standardmy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 offset-2 offset-md-0 col-md-4 text-right">
                        <div class="text left_side">
                            <h3>What we can?</h3>
                            <p>Lorem Ipsum is simply dummy text oftheg and typesetting industry. Loremumhaseen the industry's standardmy text ever since the 1500s.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <div class="outside_circle">
                            <div class="image_circle">
                                <img src="images/about-circle.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-8 offset-2 offset-md-0 col-md-4 text-left">
                        <div class="text right_side">
                            <h3>What we do?</h3>
                            <p>Lorem Ipsum is simply dummy text oftheg and typesetting industry. Loremumhaseen the industry's standardmy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2 col-md-4 offset-md-4 text-center">
                        <div class="text bottom_side">
                            <h3>Why choose us?</h3>
                            <p>Lorem Ipsum is simply dummy text oftheg and typesetting industry. Loremumhaseen the industry's standardmy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
                

            </div>
        </section> -->
        <!-- about ends ====================================-->

        <section id="gallery">
            <div class="gallery_overlay">
                <div class="container">

                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            <div class="common_heading">
                                <h2>Gallery</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the industry's standard dummy text ever since the end of 1500s.</p>
                            </div>
                        </div>
                    </div>

                    <!-- image and slide-->
                    <div class="row gallery_slide">

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-1.jpg">
                                    <img src="images/img-1.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-2.jpg">
                                    <img src="images/img-2.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-3.jpg">
                                    <img src="images/img-3.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-4.jpg">
                                    <img src="images/img-4.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-5.jpg">
                                    <img src="images/img-5.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-6.jpg">
                                    <img src="images/img-6.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-7.jpg">
                                    <img src="images/img-7.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-8.jpg">
                                    <img src="images/img-8.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-1.jpg">
                                    <img src="images/img-1.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-2.jpg">
                                    <img src="images/img-2.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-3.jpg">
                                    <img src="images/img-3.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-4.jpg">
                                    <img src="images/img-4.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-5.jpg">
                                    <img src="images/img-5.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-6.jpg">
                                    <img src="images/img-6.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-7.jpg">
                                    <img src="images/img-7.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="image">
                                <a class="venobox" data-gall="gallery01" href="images/img-8.jpg">
                                    <img src="images/img-8.jpg" alt="">
                                    <div class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div><!-- row -->

                </div>
            </div>
        </section>
        <!-- gallery-portfolio ends ========================-->

        <section id="service">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="common_heading">
                            <h2>Our Clubs & Forums</h2>
                            <p>United International University have 14 clubs and forums that offers diverse events and activities for students to explore anything they like. Also these clubs arrange interactive session to delevop industry level skills for the students</p>
                        </div>
                    </div>
                </div>

                <div class=" service_slide">

                    <div class="slide_item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <div class="heading">
                                    <h3>UIU Computer Club</h3>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="image">
                                    <img src="images/ccl.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-left">
                                <div class="text right_side_text">
                                    <p>To connect with a community of senior, junior, alumni, and respected teachers. Build harmony and get ideas about the demanding skills of the current and future professional domain.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- slide_item -->

                    <div class="slide_item">
                        <div class="row">
                            <div class="col-md-5 text-left smallDeviceDisplay">
                                <div class="heading">
                                    <h3>UIU Finance Forum</h3>
                                </div>
                            </div>
                            <div class="col-md-2 smallDeviceDisplay">
                                <div class="image">
                                    <img src="images/UIUFF.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-right">
                                <div class="text left_side_text">
                                    <p>UIU Finance Forum is a student initiative which started in 2014. The forum was formed with an objective of sharing knowledge and information about the financial sector and bringing about active participation. Market updates and gives you the opportunity to connect with other financial professionals.</p>
                                </div>
                            </div>
                            <div class="col-md-2 largeDeviceDisplay">
                                <div class="image">
                                    <img src="images/UIUFF.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-left largeDeviceDisplay">
                                <div class="heading">
                                    <h3>UIU Finance Forum</h3>
                                </div>
                            </div>
                        </div>
                    </div> <!-- slide_item -->

                    <div class="slide_item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <div class="heading">
                                    <h3>UIU Robotics</h3>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="image">
                                    <img src="images/robo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-left">
                                <div class="text right_side_text">
                                    <p>Our mission is to build a progressive platform for Robotics enthusiasts by active participation in research, training and contest. We do it by organizing various programs, workshops and competitions that help us create connections among students, teachers and employers.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- slide_item -->

                    <div class="slide_item">
                        <div class="row">
                            <div class="col-md-5 text-left smallDeviceDisplay">
                                <div class="heading">
                                    <h3>UIU App Forum</h3>
                                </div>
                            </div>
                            <div class="col-md-2 smallDeviceDisplay">
                                <div class="image">
                                    <img src="images/uiuappf.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-right">
                                <div class="text left_side_text">
                                    <p>APP Forum is an initiative of UIU CCC. UIU App forum is a developer's community with machine learning</p>
                                </div>
                            </div>
                            <div class="col-md-2 largeDeviceDisplay">
                                <div class="image">
                                    <img src="images/uiuappf.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 text-left largeDeviceDisplay">
                                <div class="heading">
                                    <h3>UIU App Forum</h3>
                                </div>
                            </div>
                        </div>
                    </div> <!-- slide_item -->

                </div> <!-- service_slide -->
                <div class="service_button">
                    <a href="clubprofile.php">View more</a>
                </div>
            </div> <!-- container -->
        </section>
        <!-- service ends ==================================-->

    <section id="testimonial">
    <div class="overlay">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 dot_border">
                    <div class="testimonial_image">
                        <div class="image">
                            <img src="images/vcuiu.jpg" alt="">
                        </div>
                        <div class="image">
                            <img src="images/mamun.jpg" alt="">
                        </div>
                        <div class="image">
                            <img src="images/testimonial3.png" alt="">
                        </div>
                        <div class="image">
                            <img src="images/testimonial2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 ">
                    <div class="testimonial_message">
                        <div class="text">
                            <h4>Prof Dr. Md. Abul Kashem Mia
                                
                                </h4>
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <h5>Vice Chancellor (In-Charge) & Pro Vice Chancellor</h5>
                            <p>Our dream is to create industry level experts to face the challenges of 4th industrial revolution.
                                Quality is our utmost priority. We work for our students to ensure the best quality.
                            </p>
                            <h6>Prof Dr. Md. Abul Kashem Mia</h6>
                        </div>
                        <div class="text">
                            <h4>Khondaker Abdullah AL Mamun</h4>
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <h5>Professor & Director - AIMS Lab</h5>
                            <p>Khondaker A. Mamun received his Ph.D. in Computer and Biomedical Engineering from 
                                University of Southampton, UK. He is working as an Associate Professor and 
                                then Professor at the Department of Computer Science & Engineering, 
                                United International University (UIU), Dhaka, Bangladesh.</p>
                            <h6>Khondaker Abdullah AL Mamun</h6>
                        </div>
                        <div class="text">
                            <h4>Mohammad Riyad</h4>
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <h5>General Menager/GM</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ardy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ook. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially changed. orem Ipsum is simply dummy text of the printing.</p>
                            <h6>Mohammad Riyad</h6>
                        </div>
                        <div class="text">
                            <h4>Shafin Sajjad</h4>
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <h5>Chairman/CEO</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ardy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ook. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially changed. orem Ipsum is simply dummy text of the printing.</p>
                            <h6>Shafin Sajjad</h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
        <section id="counter">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg">
                            <div class="text">
                                <h5 class="counting"><?php echo $clbNum; ?></h5>
                                <p>All clubs</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg">
                            <div class="text">
                                <h5 class="counting"><?php echo $stdntNum; ?></h5>
                                <p>All students</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg">
                            <div class="text">
                                <h5 class="counting"><?php echo $membrNum; ?></h5>
                                <p>Club members</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg">
                            <div class="text">
                                <h5 class="counting"><?php echo $fcltyNum; ?></h5>
                                <p>All advisors</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg">
                            <div class="text">
                                <h5 class="counting"><?php echo $admnNum; ?></h5>
                                <p>All admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter ends ==================================-->

        <section id="team">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="common_heading">
                            <h2>UIU Dirtectorate of Students Affairs and Career Counseling Center</h2>
                            <p>Directorate of Student Affairs has been set up which plays the central role in the development and growth of students in co-curricular activities. These student activities are promoted through a number of student clubs.</p>
                        </div>
                    </div>
                </div>

                <div class="row team_members team_slide">
                    <div class="col-md-3">
                        <div class="member">
                            <div class="image">
                                <a class="venobox" data-gall="next" href="images/ccc.jpg">
                                    <img src="images/ccc.jpg" alt="">
                                    <span class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="text">
                                <h5>MD. AMINUL ISLAM</h5>
                                <h6>Assistant Director</h6>
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="member">
                            <div class="image">
                                <a class="venobox" data-gall="next" href="images/dsa1.jpg">
                                    <img src="images/dsa1.jpg" alt="">
                                    <span class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="text">
                                <h5>Sohel Rana</h5>
                                <h6>Senior Executive</h6>
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="member">
                            <div class="image">
                                <a class="venobox" data-gall="next" href="images/dsa2.jpeg">
                                    <img src="images/dsa2.jpeg" alt="">
                                    <span class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="text">
                                <h5>MD. MAHFUZUL KABIR</h5>
                                <h6>Executive</h6>
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="member">
                            <div class="image">
                                <a class="venobox" data-gall="next" href="images/dsa3.jpg">
                                    <img src="images/dsa3.jpg" alt="">
                                    <span class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="text">
                                <h5>BADIUL ALAM KHOKON</h5>
                                <h6>Sports Instructor</h6>
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="member">
                            <div class="image">
                                <a class="venobox" data-gall="next" href="images/dsa4.jpg">
                                    <img src="images/dsa4.jpg" alt="">
                                    <span class="image_overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="text">
                                <h5>MD. NIZAM UDDIN MANIK</h5>
                                <h6>Physical Instructor</h6>
                            </div>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- team ends =====================================-->

        <!-- <section id="market">
            <div class="container">
                <div class="row market_slide">
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(1).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(2).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(3).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(4).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(5).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(6).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(7).png" alt="">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="logo">
                            <img src="images/market(8).png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- market ends ===================================-->

        <section id="contact">

            <div class="contact_logo">
                <div class="container">
                    <div class="row logo_last">
                        <div class="col-12 text-center">
                            <img src="images/Logo-Green.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="text">
                                <i class="fa fa-map-marker"></i>
                                <a>United City, Madani Avenue, Badda, Dhaka - 1212, Bangladesh.</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="text">
                                <i class="fa fa-phone"></i>
                                <a href="tel:+1234567898960">
                                    Tel: +88 09604 UIU
                                </a>
                                <a href="tel:+1234567898960">
                                    UIU (848 848)
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:portfolio@hunt.com">
                                    info@uiu.ac.bd
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="text no_border">
                                <i class="fa fa-globe"></i>
                                <a href="http://www.uiu.ac.bd/">
                                    www.uiu.ac.bd
                                </a>
                                <a href="http://www.dsa.uiu.ac.bd/">
                                    www.dsa.uiu.ac.bd
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="contact_social">
                                <h3>Follow Us</h3>
                                <a href="https://www.facebook.com/uiuinfo"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/UIU2003"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/school/uiuinfo/"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- contact ends ==================================-->

        <!-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright &copy; 2019.All rights reserved by <span>HUNT</span></p>
            </div>
        </div>
    </div>
</footer> -->
        <!-- footer ends ===================================-->

        <div id="go_top">
            <i class="fa fa-long-arrow-up"></i>
        </div>

        <!--==============================================================================-->

        <!-- script here ===============================-->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.js"></script>
        <script src="js/custom.js"></script>

    </body>

    </html>

<?php
} else {
    header('location:login.php');
}
?>