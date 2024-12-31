<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog post</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>Blog Post Approval</h2>
        <a class="btn btn-primary" href="" role="button">Aprove all</a>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th>Post No</th>
                    <th>Club ID</th>
                    <th>Writer</th>
                    <th>Headline</th>
                    <th>Created at</th>
                    <th>Action</th>


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

				 $query = "SELECT Post_No,club_id, writer , headline, Request_Time  FROM blog_post";
				 $result = mysqli_query($connect,$query);
                 
                 $count = mysqli_num_rows($result);
					
					//read data of each row
                    if($count > 0){
                        
                        // if(isset($_REQUEST['deleted'])){
                        //     echo "<font color ='green' > Data deleted</font>";
                        // }
    					while ($row = mysqli_fetch_assoc($result)) { //associative array
						// code...
                        $Post_No = $row['Post_No'];
                        $club_id = $row['club_id'];
                        $writer = $row['writer'];
                        $headline = $row['headline'];
                        $Request_Time= $row['Request_Time'];


                        ?>

                        <tr>
                        
                            <td><?php echo $Post_No ?></td>
                            <td><?php echo $club_id ?></td>
                            <td><?php echo $writer ?></td>
                            <td><?php echo $headline ?></td>
                            <td><?php echo $Request_Time?></td>
						    
                            <td><a class="btn btn-outline-success" href="#">Approve</a></td>
						    <td><a class="btn btn-outline-danger" href="delete.php?/Post_No=<?php echo $row["Post_No"]; ?>">Delete</a></td>
                            
					</tr>
                   
                    </tbody>


<?php

					}
                    //while loop ends here...

?>
                </table>
                <!-- table ends here -->
<?php
                }else
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