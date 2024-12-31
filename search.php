<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/alldata.css">
</head>

<body>

    <section id="search">
        
        <div class="container">
        <div class="bg">
        <center>
            <a href="index.php">HOME</a>
        </center>
        </div>
        <div class="search_bar">
            
            <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
            Search by skills <input type="text" name="search_text">
            <input type="submit" value="search">

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
    </div>
        
    </section>

    


</body>

</html>
