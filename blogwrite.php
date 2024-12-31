<?php
//define variables and set to empty values

$clubid = $writer_name = $headline_text = $blog_text = '';
$errors = array( 'clubid' =>'', 'writer_name' =>'', 'headline_text' =>'', 'blog_text' =>'' );
if ( isset( $_POST['submit'] ) ) {

    include 'databaseConnect.php';

    if ( empty( $_POST['clubid'] ) ) {
        // code...
        $errors['clubid'] = '*Club id is required!';
    } else {

        $clubid = $_POST['clubid'];
        if ( !preg_match( "/^[0-9]{4}$/", $clubid ) ) {
            $errors['clubid'] = '*club id must be 4 digits';

        }
    }

    if ( empty( $_POST['writer_name'] ) ) {
        // code...
        $errors['writer_name'] = '*Writer name is required!';
    } else {

        $writer_name = $_POST['writer_name'];
        
    }

    if ( empty( $_POST['headline_text'] ) ) {
        // code...
        $errors['headline_text'] = '*Headline is required!';
    } else {

        $headline_text = $_POST['headline_text'];

    }

    if ( empty( $_POST['blog_text'] ) ) {
        // code...
        $errors['blog_text'] = '*blog is required!';
    } else {

        $blog_text = $_POST['blog_text'];

    }

    if ( array_filter( $errors ) ) {
        // code...
        //echo 'Error in the form!';
        //if there's errors we'll do nothing.
    } else {
        //echo 'form is valid.';

        header( 'Location: successfull.php' );
        $clubid = mysqli_real_escape_string( $connect, $_POST['clubid'] );
        $writer_name = mysqli_real_escape_string( $connect, $_POST['writer_name'] );
        $headline_text = mysqli_real_escape_string( $connect, $_POST['headline_text'] );
        $blog_text = mysqli_real_escape_string( $connect, $_POST['blog_text'] );

        $query = "INSERT INTO 	blog_post(club_id,writer,headline,blog) 
			                    VALUE ('$clubid','$writer_name','$headline_text','$blog_text') ";
        $result = mysqli_query( $connect, $query ) or die( "Query failed" );

    }

}
?>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Blog Write</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/venobox.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/clubprofStyle.css">
<link rel="stylesheet" href="css/blogposts.css">

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
                            <a href="clubprofile.php" class="nav-link">Our Clubs & Forums</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Blog post</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Contact Us</a>
                        </li>
<!--
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">Profile </a>
                        </li>
-->
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

<section id = "blogpost">
    <div class="container">
    <form id="contact-us" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-inner">
                        <div class="col-md-3 col-sm-200">
                            <div class="input-box">

                                <input name="clubid" placeholder="Club ID" type="text" value="<?php echo htmlspecialchars($clubid)?>">
                                <div class="red-text">
                                    <small>
                                        <?php echo $errors['clubid'];
?>
                                    </small>
                                </div>
                                <input name="writer_name" placeholder="Writes name and designation" type="text" value="<?php echo htmlspecialchars($writer_name)?>">
                                <div class="red-text">
                                    <small>
                                        <?php echo $errors['writer_name'];
?>
                                    </small>
                                </div>

                                <input name="headline_text" placeholder="Event Headline" type="text" value="<?php echo htmlspecialchars($headline_text)?>">
                                <div class="red-text">
                                    <small>
                                        <?php echo $errors['headline_text'];
?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-100">
                            <div class="message-box">
                                <textarea name="blog_text" placeholder="Blog post"></textarea>
                                <div class="red-text">
                                    <small>
                                        <?php echo $errors['blog_text'];
                                        ?>
                                    </small>
                                </div>
                                <input class="btn btn-primary" type="submit" name="submit" value="Post">
                                <p class="contact-send-message"></p>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    <!-- End Tags -->
    <!-- blog post part ends here -->
</section>

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
                            UIU ( 848 848 )
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

</html>
