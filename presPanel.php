<html>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/alldata.css">
   
    <div class="container">
    
    <div class="bg">
        <center>
            <a href="index_pres.php">HOME</a>
        </center>
    </div>
    
<!--        php codes-->
        <?php
session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];

if (!empty($user_name) && !empty($user_id)) {


echo "<br>" . "ALL Data sort by name";
include('databaseConnect.php');

$sql1 = "SELECT *
FROM student
INNER JOIN members
ON student.s_id = members.s_id AND members.club_id IN (SELECT club_id
                                                       FROM club
                                                       WHERE club.pres_id = $user_id)";

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
                   <th>Due</th>
               </tr>";
    while ($data = mysqli_fetch_assoc($result)) {
        $name       = $data['s_name'];
        $id         = $data['s_id'];
        $mail       = $data['s_email'];
        $department = $data['s_department'];
        $blood      = $data['s_bloodGroup'];
        $contact    = $data['s_contact'];
        $skills     = $data['s_skills'];

        $sql2 = "SELECT m_due
                from members
                where s_id = $id";
        $result2 = mysqli_query($connect, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            while ($data2 = mysqli_fetch_assoc($result2)) {
                $due = $data['m_due'];
            }
        }

        echo "<tr>
                   <td>$name</td>
                   <td>$id</td>
                   <td>$mail</td>
                   <td>$department</td>
                   <td>$blood</td>
                   <td>$contact</td>
                   <td>$skills</td>
                   <td>$due</td>
               </tr>";
    }

    echo "</table>"."<br>"."<br>";
}
?>

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

<?php } else {
    header('location:login.php');
}