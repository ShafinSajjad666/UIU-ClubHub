<?php 

 include 'databaseConnect.php';


    if(isset($_GET['Approve'])) {
        $SID = $_GET['sid'];
        $CID = $_GET['cid'];
        $query = "UPDATE members
        SET m_status = 0
        WHERE s_id = $SID  AND club_id = $CID";
   
   if(mysqli_query($connect,$query)){
       echo "Success";
   }else{
       echo "can't approve user.";
   }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog post</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Member Approval</h2>
        <a class="btn btn-primary" href="index_admin.php" role="button">Home</a>
        <br>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th>Student Name</th>
                        <th>ID</th>
                        <th>Club Name</th>
                        <th>Contact</th>
                        <th>Payment</th>

                    </tr>
                </thead>

                <tbody>
                    <?php

                    include 'databaseConnect.php';

                    // create connection

                    //  $connection = mysqli_connect('localhost','root','','uiu_clubhub');
                    //  if(!$connection){
                    //  die("Not Connected :".mysqli_error($connection));
                    //  }

                    //read all row from database table
                    $i = 0;

                    $query = "SELECT *
                            FROM student 
                            CROSS JOIN club
                            WHERE s_id IN (SELECT s_id
                                            FROM members
                                            WHERE m_status = 1 AND members.club_id = club.club_id)";
                    $result = mysqli_query($connect, $query);

                    $count = mysqli_num_rows($result);

                    //read data of each row
                    if ($count > 0) {

                        // if(isset($_REQUEST['deleted'])){
                        //     echo "<font color ='green' > Data deleted</font>";
                        // }
                        while ($row = mysqli_fetch_assoc($result)) { //associative array
                            // code...
                            $studentName = $row['s_name'];
                            $ID = $row['s_id'];
                            $clubName = $row['name'];
                            $Contact = $row['s_contact'];
                            $clubID = $row['club_id'];

                            $query2 = "SELECT m_payment
                            FROM members
                            WHERE s_id = $ID";
                            $result2 = mysqli_query($connect, $query2);

                            $count2 = mysqli_num_rows($result2);
                            if ($count2 > 0) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $payment = $row2['m_payment'];
                                }
                            }


                    ?>

                            <tr>

                                <td><?php echo $studentName ?></td>
                                <td><?php echo $ID ?></td>
                                <td><?php echo $clubName ?></td>
                                <td><?php echo $Contact ?></td>
                                <td><?php echo $payment ?></td>

                                <input type="hidden" name="sid" value="$ID">
                                <input type="hidden" name="cid" value="$clubID">
                                <td><input type="submit" value="Approve"></td>
                                <td><input type="submit" value="Delete"></td>

                            </tr>

                </tbody>
        </form>


    <?php

                        }
                        //while loop ends here...

    ?>
    </table>
    <!-- table ends here -->
<?php
                    } else
                        echo "Currently no blog post is available!"

?>





    </div>

    <!-- <div class="container">

    <div class="input-group">
                                <label class="label">Choose club: </label>
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

    </div> -->

</body>

</html>