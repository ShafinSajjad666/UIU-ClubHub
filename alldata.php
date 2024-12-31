<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/alldata.css">

<div class="bg">
    <div class="container">
        <center>
            <a href="index_admin.php" btn>HOME</a>
        </center>


        <?php
echo "<br>" . "ALL Data sort by name";
include('databaseConnect.php');

$sql1 = "SELECT *
           FROM student
           ORDER BY s_name";

$result = mysqli_query($connect, $sql1);

if (mysqli_num_rows($result) > 0) {
    echo "<table border = 1>
               <tr>
                   <th>Name</th>
                   <th>ID</th>
                   <th>E-mail</th>
                   <th>department</th>
                   <th>Blood Group</th>
                   <th>Contact</th>
                   <th>Skills</th>
               </tr>";
    while ($data = mysqli_fetch_assoc($result)) {
        $name       = $data['s_name'];
        $id         = $data['s_id'];
        $mail       = $data['s_email'];
        $department = $data['s_department'];
        $blood      = $data['s_bloodGroup'];
        $contact    = $data['s_contact'];
        $skills     = $data['s_skills'];

        echo "<tr>
                   <td>$name</td>
                   <td>$id</td>
                   <td>$mail</td>
                   <td>$department</td>
                   <td>$blood</td>
                   <td>$contact</td>
                   <td>$skills</td>
               </tr>";
    }

    echo "</table>";
}
?>



        <?php
    include('databaseConnect.php');

    if(isset($_GET['submit'])) {
        $selected_val = $_GET['subject'];
        echo "<br>"."<br>"."Members of "."$selected_val".":"."<br>";
        if($selected_val == 'UIU Computer Club') {
            $sql1 = "SELECT *
            FROM student
            CROSS JOIN members
            WHERE student.s_id = members.s_id AND members.club_id = 1001
            ORDER BY s_name";

            $result = mysqli_query($connect, $sql1);

            $sql2 = "SELECT president 
            FROM club 
            WHERE club_id = 1001;";

            $result2 = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($result2) > 0){
                while($data2 = mysqli_fetch_assoc($result2)) {
                    $president = $data2['president'];
                    echo "<br>"."President of Computer Club is: ".$president;
                }
            }

            if(mysqli_num_rows($result) > 0) {
                echo "<table border = 1>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>department</th>
                    <th>Blood Group</th>
                    <th>Contact</th>
                    <th>Skills</th>
                </tr>";
                while($data = mysqli_fetch_assoc($result)) {
                    $name       = $data['s_name'];
                    $id         = $data['s_id'];
                    $mail       = $data['s_email'];
                    $department = $data['s_department'];
                    $blood      = $data['s_bloodGroup'];
                    $contact    = $data['s_contact'];
                    $skills     = $data['s_skills'];

                    echo "<tr>
                    <td>$name</td>
                    <td>$id</td>
                    <td>$mail</td>
                    <td>$department</td>
                    <td>$blood</td>
                    <td>$contact</td>
                    <td>$skills</td>
                </tr>";
                }

                echo "</table>";
                
            }
        }

        if($selected_val == 'UIU Robotics Club') {
            $sql1 = "SELECT *
            FROM student
            CROSS JOIN members
            WHERE student.s_id = members.s_id AND members.club_id = 1002
            ORDER BY s_name";

            $result = mysqli_query($connect, $sql1);

            $sql2 = "SELECT president 
            FROM club 
            WHERE club_id = 1002;";

            $result2 = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($result2) > 0){
                while($data2 = mysqli_fetch_assoc($result2)) {
                    $president = $data2['president'];
                    echo "<br>"."President of Robotics Club is: ".$president;
                }
            }

            if(mysqli_num_rows($result) > 0) {
                echo "<table border = 1>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>department</th>
                    <th>Blood Group</th>
                    <th>Contact</th>
                    <th>Skills</th>
                </tr>";
                while($data = mysqli_fetch_assoc($result)) {
                    $name       = $data['s_name'];
                    $id         = $data['s_id'];
                    $mail       = $data['s_email'];
                    $department = $data['s_department'];
                    $blood      = $data['s_bloodGroup'];
                    $contact    = $data['s_contact'];
                    $skills     = $data['s_skills'];

                    echo "<tr>
                    <td>$name</td>
                    <td>$id</td>
                    <td>$mail</td>
                    <td>$department</td>
                    <td>$blood</td>
                    <td>$contact</td>
                    <td>$skills</td>
                </tr>";
                }

                echo "</table>";
                
            }
        }

        if($selected_val == 'UIU Cultural Club') {
            $sql1 = "SELECT *
            FROM student
            CROSS JOIN members
            WHERE student.s_id = members.s_id AND members.club_id = 1003
            ORDER BY s_name";

            $result = mysqli_query($connect, $sql1);

            $sql2 = "SELECT president 
            FROM club 
            WHERE club_id = 1003;";

            $result2 = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($result2) > 0){
                while($data2 = mysqli_fetch_assoc($result2)) {
                    $president = $data2['president'];
                    echo "<br>"."President of Cultural Club is: ".$president;
                }
            }

            if(mysqli_num_rows($result) > 0) {
                echo "<table border = 1>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>department</th>
                    <th>Blood Group</th>
                    <th>Contact</th>
                    <th>Skills</th>
                </tr>";
                while($data = mysqli_fetch_assoc($result)) {
                    $name       = $data['s_name'];
                    $id         = $data['s_id'];
                    $mail       = $data['s_email'];
                    $department = $data['s_department'];
                    $blood      = $data['s_bloodGroup'];
                    $contact    = $data['s_contact'];
                    $skills     = $data['s_skills'];

                    echo "<tr>
                    <td>$name</td>
                    <td>$id</td>
                    <td>$mail</td>
                    <td>$department</td>
                    <td>$blood</td>
                    <td>$contact</td>
                    <td>$skills</td>
                </tr>";
                }

                echo "</table>";
                
            }
        }

    }
?>


    </div>

    <div class="container">

        <div class="input-group">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET"> <br><br>
                <label class="label">Choose club: </label>
                <div class="rs-select2 js-select-simple select--no-search">

                    <select name="subject">
                        <option disabled="disabled" selected="selected" name="search_text">Choose option</option>
                        <option>UIU Computer Club</option>
                        <option>UIU Robotics Club</option>
                        <option>UIU Cultural Club</option>
                    </select>
                    <input type="submit" name="submit" value="Show All Data">
                    <div class="select-dropdown"></div>
                </div>
            </form>

        </div>
    </div>
</div>
<div class = "container">
<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
    Search by skills <input type="text" name="search_text">
    <input type="submit" value="Search">

</form>
    

<?php
    include('databaseConnect.php');

    if(isset($_GET['search_text'])) {
        $search_text = $_GET['search_text'];

            $sql1 = "SELECT *
            FROM student
            WHERE s_skills like '%$search_text%'
            ORDER BY s_name";

            $result = mysqli_query($connect, $sql1);

            if(mysqli_num_rows($result) > 0) {
                echo "<table border = 1>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>department</th>
                    <th>Blood Group</th>
                    <th>Contact</th>
                    <th>Skills</th>
                </tr>";
                while($data = mysqli_fetch_assoc($result)) {
                    $name       = $data['s_name'];
                    $id         = $data['s_id'];
                    $mail       = $data['s_email'];
                    $department = $data['s_department'];
                    $blood      = $data['s_bloodGroup'];
                    $contact    = $data['s_contact'];
                    $skills     = $data['s_skills'];

                    echo "<tr>
                    <td>$name</td>
                    <td>$id</td>
                    <td>$mail</td>
                    <td>$department</td>
                    <td>$blood</td>
                    <td>$contact</td>
                    <td>$skills</td>
                </tr>";
                }

                echo "</table>";
                
            }
        
    }
?>
</div>



</html>



