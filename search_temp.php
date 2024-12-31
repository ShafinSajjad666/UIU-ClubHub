<?php
    echo "Aggregate function: ";
    include('databaseConnect.php');

    $sql1 = "SELECT name, SUM(m_due) as due
                FROM club 
                CROSS JOIN members
                WHERE club.club_id = 1001";

            $result = mysqli_query($connect, $sql1);

            if(mysqli_num_rows($result) > 0) {
                echo "<table border = 1>
                <tr>
                    <th>Name</th>
                    <th>Due</th>
                </tr>";
                while($data = mysqli_fetch_assoc($result)) {
                    $name       = $data['name'];
                    $due        = $data['due'];

                    echo "<tr>
                    <td>$name</td>
                    <td>$due</td>

                    
                </tr>";
                }

                echo "</table>";
                
            }
?>