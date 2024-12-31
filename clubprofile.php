<?php
    session_start();
    
    $user_name = $_SESSION['s_name'];

    if(!empty($user_name)) {
?>

<html lang="en">
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
    <link rel="stylesheet" href="css/clubprofStyle.css">

<!-- header part starts here -->
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
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Our Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link active">Our Clubs & Forums</a>
                    </li>
                    <li class="nav-item">
                        <a href="blogposts.php" class="nav-link">Blog posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Contact Us</a>
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
<!-- header part ends here -->
<section id="team">
    <div class="container">
        <h6 class="section-subtitle text-center">Meet With</h6>
        <h6 class="section-title mb-5 text-center">Our Clubs and Forums</h6>
        <div class="row">
            <a href="clubRegistrationn.php">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/ccl.png">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Computer Club
                            </h5>
                            <p>
                                UIU Computer Club is where great minds collaborate, and initiate ground-breaking ideas to reality.
                                UIU Computer Club is a prestigious club of UIU. It offers diverse and exciting events throughout the year.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="clubRegistrationn.php">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiuappf.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU App Forum
                            </h5>
                            <p>
                                APP Forum is an initiative of UIU CCC. It is a developer's community with machine learning.
                                App Forum organizes competitions such as Intra University AI contest, Deep Learning for the students.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="clubRegistrationn.php">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/robo.png">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Robotics
                            </h5>
                            <p>
                                Our mission is to build a progressive platform for Robotics enthusiasts by active participation 
                                in research,training and contest. We do it by organizing various programs, workshops and competitions.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="clubRegistrationn.php">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiufff.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Finance Forum
                            </h5>
                            <p>
                                UIU Finance Forum is a student initiative which started in 2014. 
                                It was formed with an objective of sharing knowledge and 
                                information about the financial sector and bringing about active participation.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiupc.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Photography Club
                            </h5>
                            <p>
                                UIU Photography Club (UIUPC) is one of the oldest clubs of United International University. 
                                Since its inception in 2005, our club is working incessantly to explore the creative area of photography.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiusias.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                Students’ International Affairs Society
                            </h5>
                            <p>
                                CIAC-UIU and SIAS-UIU that focuses on the higher study and global scope of 
                                UIU students and connects with their pioneers- The Alumni & Faculty Members.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiueec.png">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Electrical and Electronic Club
                            </h5>
                            <p>
                                UIUEEC works with the motto “innovation and excellence to asymptote”. 
                                It started its journey on February, 2013. This club is active with different events.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiucc.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Cultural Club
                            </h5>
                            <p>
                                UIU Cultural Club. We ignite the torch of UIU culture.
                                We organize different Cultural events and talent hunt events.Also UIU Club Forum Fest which is the biggest collaborations of clubs
                                and forums of UIU.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiubc.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Business Club
                            </h5>
                            <p>
                                The BUSINESS CLUB at United International University is for dreamers and doers. Our mission
                                is to connect the students of business school to the industry level experts.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiumf.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Marketing Forum
                            </h5>
                            <p>
                                Established in February,2014
                                UIU Marketing Forum is formed to UNLOCK the marketing knowledge & EXPLORE the creativity in marketing to prepare
                                UIU students for the industry level challenge. 
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiutfc.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Theatre & Film Club
                            </h5>
                            <p> 
                                UIU TFC have different types of signature programs. Like Stand Up Comedy, Tokkor, 
                                Light-Camera-Action etc. If you want to explore you & want to show your talent, then join us.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiuedf.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Entrepreneur Development Forum
                            </h5>
                            <p>
                                UIU EDF is one of the most reputed and progressing forums in United International University. 
                                Our vision is to develop entrepreneurial skills of the students.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiuaf.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Accounting Forum
                            </h5>
                            <p>
                            Accounting Forum is a wing of Career Counseling Center,UIU. 
                            It organise different seminars & programs. 
                            It is also the first forum to organise 1st ever Accounting Olympiad in Bangladesh. 
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiusc.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                            UIU Sports Club
                            </h5>
                            <p>
                                UIU Sports Club is for the sports enthusiasts of UIU. 
                                It organizes indoor and outdoor tournaments for the students. It also arrange trainning sessions for
                                cricket, football and other sports.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-center mb-4">
                        <img class="card-img-top inset" src="images/uiusdf.jpg">
                        <div class="card-body">
                            <!-- <h6 class="small text-primary font-weight-bold">UIU Computer Club</h6> -->
                            <h5 class="card-title">
                                UIU Skill Development Forum
                            </h5>
                            <p>
                                UIU Skill Development forum is solely dedicated for the skill developments of the students of UIU.
                                It organizes workshops for all departments. The aim of this forum is a better
                                future of the students of UIU.
                            </p>
                            <div class="socials">
                                <a href="https://www.facebook.com/uiuccl" target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            

        </div>
    </div>
</section>
<!-- End of Team Section -->
<!-- Footer part starts here -->
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
                        <a>1234, Parkstreet Avenue Newyork City, America.</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="text">
                        <i class="fa fa-phone"></i>
                        <a href="tel:+1234567898960">
                            +123 45 67 89 89 60
                        </a>
                        <a href="tel:+1234567898960">
                            +123 45 67 89 89 60
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:portfolio@hunt.com">
                            portfolio@hunt.com
                        </a>
                        <a href="mailto:info@hunt.com">
                            info@hunt.com
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="text no_border">
                        <i class="fa fa-globe"></i>
                        <a href="http://www.hunt-personal-port.com/">
                            www.hunt-personal-port.com
                        </a>
                        <a href="http://www.hunt-personal-port.com/">
                            www.portfolio-hunt.com
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_social">
                        <h3>Follow Us</h3>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</section>
<!-- contact ends ==================================-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright &copy; 2019.All rights reserved by <span>HUNT</span></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer ends ===================================-->

<div id="go_top">
    <i class="fa fa-long-arrow-up"></i>
</div>

</html>

<?php
    } else {
        header('location:login.php');
    }
?>