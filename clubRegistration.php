<?php
    session_start();
    
    $user_name = $_SESSION['s_name'];
    $user_id = $_SESSION['s_id'];

    if(!empty($user_name)) {
?>


<html lang="en">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UIU ClubHub</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:400,500,600,700,800,900"
    rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/venobox.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/clubprofStyle.css">
<link rel="stylesheet" href="css/clubRegistration.css">

<!-- header part starts here -->
<header id="navigation">
    <div class="navigation_scroll">
        <nav class="navbar navbar-expand-md p-0">
            <div class="container p-0">
                <a href="#" class="navbar-brand">
                    <img src="images/Logo-Green.png" class="img-fluid" alt="logo">
                </a>
                <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse"
                    data-target="#myMenuToggler">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="myMenuToggler">
                    <ul class="navbar-nav ml-auto p-0">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="index.php" class="nav-link">About Us</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Our Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service" class="nav-link active">Our Clubs & Forums</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Top Peformers</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Header part ends here -->


<!-- <section id="club_info">
    <div></div>
    <div class="join_club">
        <div class="container">
            <div class="formbold-main-wrapper">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="formbold-form-wrapper">

                    <!-- <img src="images/ccl.png" class= "center"> -->
                    <?php 
                               
                               if(isset($_POST['submit'])){

                                include 'config.php';
                               
                                $fullname = $_POST['fullname'];
                                $email = $_POST['email'];
                                $phone= $_POST['phone'];
                                $blood_group = $_POST['blood_group'];
                                $skills = $_POST['skills'];
                                $student_id = $_POST['student_id'];
                                $department = $_POST['department'];
                                $current_trimester = $_POST['current_trimester'];

                                $query = "INSERT INTO 	members(m_name,m_id,m_email,m_contact,m_bloodGroup, m_skills, m_department, current_trimester) 
			                    VALUE ('$fullname','$student_id','$email','$phone','$blood_group','$skills','$department','$current_trimester') ";
			                    $result = mysqli_query($connection,$query) or die("Query failed");


                               }
                               
                               
                               ?>

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"  autocomplete = "off" class="form">
                        <div class="formbold-form-title">
                            <h2 class="">Register now</h2>
                            <p>
                                Please fill up the registration form with correct informations.
                            </p>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="fullname" class="formbold-form-label">
                                    Full name
                                </label>
                                <input type="text" name="fullname" id="fullname" class="formbold-form-input" />
                            </div>
                            <!-- <div>
                                <label for="s_id" class="formbold-form-label"> Student ID </label>
                                <input type="text" name="s_id" id="s_id" class="formbold-form-input" />
                            </div> -->
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="email" class="formbold-form-label"> Email </label>
                                <input type="email" name="email" id="email" class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="phone" class="formbold-form-label"> Phone number </label>
                                <input type="text" name="phone" id="phone" class="formbold-form-input" />
                            </div>
                        </div>

                        <div class="formbold-mb-3">
                            <label for="Department" class="formbold-form-label">
                                Department
                            </label>
                            <input type="text" name="Department" id="Department" class="formbold-form-input" />
                        </div>

                        <div class="formbold-mb-3">
                            <label for="blood_group" class="formbold-form-label">
                                Blood Group
                            </label>
                            <input type="text" name="blood_group" id="blood_group" class="formbold-form-input" />
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="skills" class="formbold-form-label"> Your Skills</label>
                                <input placeholder="(eg: Graphics Design)" type="text" name="skills" id="skills"
                                    class="formbold-form-input" />
                            </div>
                            <div>
                                <!-- <label for="country" class="formbold-form-label"> Country </label>
          <input
            type="text"
            name="country"
            id="country"
            class="formbold-form-input"
          /> -->                
                                <label for="Clubs" class="formbold-form-label"> Select the club you want to join</label>
                               
                               
                               
                                <!-- <form action="/action_page.php"> -->
                                    <input list="clubs" name="clubs">
                                    <datalist id="clubs">
                                        <option value="UIU Computer Club">
                                        <option value="UIU App Forum">
                                        <option value="UIU Robotics">
                                        <option value="UIU Finance Forum">
                                        <option value="UIU Photography Club">
                                        <option value="Students International Affairs Society">
                                        <option value="UIU Electrical and Electronics Club">
                                        <option value="UIU Cultural Club">
                                        <option value="UIU Business Club">
                                        <option value="UIU Marketing Forum">
                                        <option value="UIU Theatre and Film Club">
                                        <option value="UIU Entrepreneur Development Forum">
                                        <option value="UIU Accounting Forum">
                                        <option value="UIU Sports Club">
                                        <option value="UIU Skill Development Forum">
                                    </datalist>
                                    <!-- <input type="submit"> -->
                                <!-- </form> -->
                            </div>
                        </div>

                        <div class="formbold-input-flex">
                            <div>
                                <label for="student_id" class="formbold-form-label"> Student ID </label>
                                <input type="text" name="student_id" id="post" class="formbold-form-input" />
                            </div>
                            <div>
                                <label for="current_trimester" class="formbold-form-label"> Current Trimester </label>
                                <input type="text" name="current_trimester" id="area" class="formbold-form-input" />
                            </div>
                        </div>

                        <!-- <div class="formbold-checkbox-wrapper">
                            <label for="supportCheckbox" class="formbold-checkbox-label">
                                <div class="formbold-relative">
                                    <input type="checkbox" id="supportCheckbox" class="formbold-input-checkbox" />
                                    <div class="formbold-checkbox-inner">
                                        <span class="formbold-opacity-0">
                                            <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                                                class="formbold-stroke-current">
                                                <path
                                                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                    stroke-width="0.4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                I agree to the defined
                                <a href="#"> terms, conditions, and policies</a>
                            </label>
                        </div> -->

                        <!-- <button class="formbold-btn">Register Now</button> -->
                        <input type="submit" name="submit" class="btn btn-primary" value="Register Now" />
                    </form>
                </div>
            </div>
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', sans-serif;
            }

            .formbold-mb-3 {
                margin-bottom: 15px;
            }

            .formbold-relative {
                position: relative;
            }

            .formbold-opacity-0 {
                opacity: 0;
            }

            .formbold-stroke-current {
                stroke: currentColor;
            }

            #supportCheckbox:checked~div span {
                opacity: 1;
            }

            .formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
            }

            .formbold-form-wrapper {
                margin: 0 auto;
                max-width: 570px;
                width: 100%;
                background: white;
                padding: 40px;
            }

            .formbold-img {
                margin-bottom: 45px;
            }

            .formbold-form-title {
                margin-bottom: 30px;
            }

            .formbold-form-title h2 {
                font-weight: 600;
                font-size: 28px;
                line-height: 34px;
                color: #07074d;
            }

            .formbold-form-title p {
                font-size: 16px;
                line-height: 24px;
                color: #536387;
                margin-top: 12px;
            }

            .formbold-input-flex {
                display: flex;
                gap: 20px;
                margin-bottom: 15px;
            }

            .formbold-input-flex>div {
                width: 50%;
            }

            .formbold-form-input {
                text-align: center;
                width: 100%;
                padding: 13px 22px;
                border-radius: 5px;
                border: 1px solid #dde3ec;
                background: #ffffff;
                font-weight: 500;
                font-size: 16px;
                color: #536387;
                outline: none;
                resize: none;
            }

            .formbold-form-input:focus {
                border-color: #6fda44;
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }

            .formbold-form-label {
                color: #536387;
                font-size: 14px;
                line-height: 24px;
                display: block;
                margin-bottom: 10px;
            }

            .formbold-checkbox-label {
                display: flex;
                cursor: pointer;
                user-select: none;
                font-size: 16px;
                line-height: 24px;
                color: #536387;
            }

            .formbold-checkbox-label a {
                margin-left: 5px;
                color: #6fda44;
            }

            .formbold-input-checkbox {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0;
            }

            .formbold-checkbox-inner {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 20px;
                height: 20px;
                margin-right: 16px;
                margin-top: 2px;
                border: 0.7px solid #dde3ec;
                border-radius: 3px;
            }

            .formbold-btn {
                font-size: 16px;
                border-radius: 5px;
                padding: 14px 25px;
                border: none;
                font-weight: 500;
                background-color: #6fda44;
                color: white;
                cursor: pointer;
                margin-top: 25px;
            }

            .formbold-btn:hover {
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }
            </style>
        </div>

    </div>
</section> -->

<section>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Student ID</label>
                                    <input class="input--style-4" type="text" name="id">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">email</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="email">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contact Number</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="contact">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Blood Group</label>
                                    <input class="input--style-4" type="email" name="bloodGroup">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Skills</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Choose club</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>UIU Computer Club</option>
                                    <option>UIU Robotics Club</option>
                                    <option>UIU App Forum</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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