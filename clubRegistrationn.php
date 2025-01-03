<?php

session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];

if (!empty($user_name)) {

    if (isset($_POST['submit'])) {

        include('databaseConnect.php');

        $selected_val = $_POST['subject'];

        if ($selected_val == 'UIU Computer Club') {
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['contact'];
            $blood_group = $_POST['bloodGroup'];
            $skills = $_POST['skills'];
            $student_id = $_POST['id'];



            $query2 = "INSERT INTO 	members(club_id, m_payment, m_due, s_id, m_status) 
            VALUE (1001,0,500,'$student_id', 1) ";
            $result2 = mysqli_query($connect, $query2) or die("Query failed");
        }

        if ($selected_val == 'UIU Robotics Club') {
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['contact'];
            $blood_group = $_POST['bloodGroup'];
            $skills = $_POST['skills'];
            $student_id = $_POST['id'];


            $query2 = "INSERT INTO 	members(club_id, m_payment, m_due, s_id, m_status) 
            VALUE (1002,0,500,'$student_id', 1) ";

            $result2 = mysqli_query($connect, $query2) or die("Query failed");
        }

        if ($selected_val == 'UIU Cultural Club') {
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['contact'];
            $blood_group = $_POST['bloodGroup'];
            $skills = $_POST['skills'];
            $student_id = $_POST['id'];


            $query2 = "INSERT INTO 	members(club_id, m_payment, m_due, s_id, m_status) 
            VALUE (1003,0,500,'$student_id', 1) ";
            $result2 = mysqli_query($connect, $query2) or die("Query failed");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


    <!-- Title Page-->
    <title>Club Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/clubRegistration.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="container">
                    <br>
                    <center>
                        <a href="index.php" class="btn btn-primary">
                            Home
                        </a>
                    </center>
                </div>
                <div class="card-body">

                    <h2 class="title">Registration Form</h2>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" class="form">
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
                                    <input readonly class="input--style-4" type="text" name="id" placeholder="<?php echo $user_id ?>" value="<?php echo $user_id ?>">
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
                                    <input class="input--style-4" type="text" name="bloodGroup">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Skills</label>
                                    <input class="input--style-4" type="text" name="skills">
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
                                    <option>UIU Cultural Club</option>
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

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php
} else {
    header('location:login.php');
}
?>
<!-- end document-->
