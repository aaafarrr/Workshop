<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

$conn = mysqli_connect('localhost', 'logi', 'p-ws-login', 'ws_login');

if(isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

if(isset($_POST['username'], $_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo "AS";
	$select = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
	if(mysqli_num_rows($select) > 0 ){
		$_SESSION['login'] = true;
		Header('Location: flag.php');
	}else{
		$gagal = true;
	}
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!-- ?source -->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://static.thenounproject.com/png/76795-200.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submit" value="Login" class="btn login_btn mb-3">Login</button>
				   </div>
					<?php
					if(isset($gagal) && $gagal == true){
						echo '
					<div class="alert alert-danger" role="alert">
					  Username atau password salah!
					</div>';
					}?>
					</form>
				</div>
	
			</div>
		</div>
	</div>
</div>
</body>
</html>