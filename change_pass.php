<?php
include('databaseConnect.php');
session_start();

$user_name = $_SESSION['s_name'];
$user_id = $_SESSION['s_id'];

if (!empty($user_name)) {
    $sql = "SELECT * FROM student
      WHERE s_id = $user_id";

    $query = $connect->query($sql);
    $data = mysqli_fetch_assoc($query);
    $s_id     = $data['s_id'];
    $s_pass   = $data['s_pass'];

    if (isset($_POST['curr_pass'])) {
        $curr_pass   = $_POST['curr_pass'];
        $new_pass    = $_POST['new_pass'];
        $con_pass    = $_POST['con_pass'];

        if ($curr_pass == $s_pass && $new_pass == $con_pass) {
            $sql1 = "UPDATE student 
            SET s_pass = '$new_pass'
            WHERE s_id = $s_id";

            if ($connect->query($sql1) == TRUE) {
                echo "Save Changed";
            } else {
                echo "There is an error saving your data";
            }
        }
    }



?>


    <html>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off" class="form">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Current Password</label>
                        <input class="form-control" type="password" name="curr_pass" placeholder="••••••">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>New Password</label>
                        <input class="form-control" type="password" name="new_pass" placeholder="••••••">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                        <input class="form-control" type="password" name="con_pass" placeholder="••••••">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
        </div>
        <div class="container">
            <div class="col d-flex justify-content-end">
                <input type="submit" name="submit" class="btn btn-primary" value="Save changes" />
            </div>
        </div>
    </form>

    </html>

<?php
} else {
    header('location:login.php');
}
?>