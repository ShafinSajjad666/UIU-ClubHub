<?php
include('databaseConnect.php');
session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];

if (!empty($user_name) && !empty($user_id)) {
  $sql = "SELECT * FROM student
      WHERE s_id = $user_id";

  $query = $connect->query($sql);
  $data = mysqli_fetch_assoc($query);

  $s_name   = $data['s_name'];
  $s_id     = $data['s_id'];
  $s_email  = $data['s_email'];
  $s_skills = $data['s_skills'];
  $s_pass   = $data['s_pass'];

  if (isset($_POST['s_id'])) {
    $new_s_name   = $_POST['s_name'];
    $new_s_id     = $_POST['s_id'];
    $new_s_email  = $_POST['s_email'];
    $new_s_skills = $_POST['s_skills'];

    $sql1 = "UPDATE student 
    SET s_name = '$new_s_name', s_skills = '$new_s_skills'
    WHERE s_id = $new_s_id";

    if ($connect->query($sql1) == TRUE) {
      echo "Save Changed";
    } else {
      echo "There is an error saving your data";
    }
  }

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile page Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
      <div class="row flex-lg-nowrap">

        <div class="col">
          <div class="row">
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="e-profile">
                    <div class="row">
                      <div class="col-12 col-sm-auto mb-3">
                        <div class="mx-auto" style="width: 140px;">
                        </div>
                      </div>
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">

                        <div class="text-center text-sm-right">

                        </div>
                      </div>
                    </div>

                    <div class="tab-content pt-3">
                      <div class="tab-pane active">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" class="form">
                          <div class="row">
                            <div class="col">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="form-control" type="text" name="s_name" placeholder="<?php echo $s_name ?>" value="<?php echo $s_name ?>" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Student ID</label>
                                    <input readonly class="form-control" type="text" name="s_id" placeholder="<?php echo $s_id ?>" value="<?php echo $s_id ?>" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input readonly class="form-control" name="s_email" type="text" placeholder="<?php echo $s_email ?>" value="<?php echo $s_email ?>" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col mb-3">
                                  <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" rows="5" name="s_skills" placeholder="Your skills (eg: graphics design, web development, cricket, dance, singing......) "></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-6 mb-3">
                              <div class="mb-2"><b>
                                  <a href="change_pass.php">
                                    Change Password
                                  </a>
                                </b>
                              </div>
                            <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                              <div class="mb-2"><b>Keeping in Touch</b></div>
                              <div class="row">
                                <div class="col">
                                  <label>Email Notifications</label>
                                  <div class="custom-controls-stacked px-2">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                      <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                      <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                      <!-- <label class="custom-control-label" for="notifications-offers">Personal Offers</label> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col d-flex justify-content-end">
                              <input type="submit" name="submit" class="btn btn-primary" value="Save changes" />
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="px-xl-3">
                    <a href="login.php">
                      <button class="btn btn-block btn-secondary">
                        <i class="fa fa-sign-out"></i>
                        <span><a href="logout.php" class="nav-gg">Log Out</a></span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
              <!-- <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <style type="text/css">
      body {
        margin-top: 20px;
        background: #f8f8f8;
        /* -ms-transform: translateY(-50%); */
      }
    </style>

    <script type="text/javascript">

    </script>
  </body>

  </html>
<?php
} else {
  header('location:login.php');
}
?>