<?php

require('databaseConnect.php');
session_start();


?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>UIU Club Hub</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="css/login.css">

</head>

<body>

	<?php
	if (isset($_POST['id'])) {
		$id 	= $_POST['id'];
		$pass = $_POST['pass'];
			$sql = "SELECT * FROM log_in WHERE id = $id AND pass = '$pass'";
			$query = $connect->query($sql);

			if (mysqli_num_rows($query) > 0) {
				$data = mysqli_fetch_array($query);

				$name = $data['name'];
				$s_id = $data['id'];
				$type = $data['type'];
				$_SESSION['s_name'] = $name;
				$_SESSION['s_id'] = $s_id;

				if($type == 1) {
					header('location:index_admin.php');
				} else if ($type == 2) {
					header('location:index_mentor.php');
				} else if ($type == 3) {
					header('location:index_pres.php');
				} else {
					header('location:index.php');
				}
				

			} else {
				echo "Wrong id or password";
			}
		}
	
	// else {
	// 	echo "not set";
	// }
	?>

	<!-- partial:index.partial.html -->
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" class="login__input" placeholder="ID" name="id">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" class="login__input" placeholder="Password" name="pass">
					</div>


					<button class="button login__submit" name="save">
						<span class="button__text">Log In Now</span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>
				</form>
				<!--
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
-->
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
		</div>
	</div>
	<!-- partial -->

</body>

</html>