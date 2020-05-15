<?php 

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
	exit;
}
require 'functions.php';
$conn = koneksi();

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if (mysqli_num_rows($cek_user) == 1) {
		$user = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $user['password'])) {
			$_SESSION['username'] = $username;
			header('Location: index.php');
			exit;
		}else{
			$error = 'Password salah';
		}
		
	}else {
		$error = "username belum terdaftar";
	}
}

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(../image/login1.jpg); background-position: -100px; height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover">">
  	<div class="con" style="margin-left: 500px;">

	<?php if( isset($error) ) : ?>
		<p><?=$error; ?></p>

	<?php endif; ?>

<div class="row">
  <div class="col-lg-6 col-md-4">
    <div class="thumbnail">
      <img src="../image/pd.jpg" alt="...">
      <div class="caption">
    <h3>Login</h3>
    <form action="" method="post">
		<ul>
			
			<li>
				<label>Username :</label><br>
				<input type="text" name="username">
			</li>
			<li>
				<label>Password :</label><br>
				<input type="password" name="password">
			</li>
			<li>
				<button type="submit" name="login">login</button>
			</li>
		</ul>
	</form>
	<a href="registrasi.php">Registrasi</a>
      </div>
    </div>
  </div>
</div>
	
</div>
</body>
</html>