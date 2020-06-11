<?php 
	session_start();

	if ( isset($_SESSION["login"]) ) {
		header('location: index.php');
	}

	include 'function.php';

	if ( isset($_POST["submit"]) ) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM tbluser WHERE username = '$username'");
		
		// cek username
		if ( mysqli_num_rows($result) === 1 ) {
			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"]) ) {
				$_SESSION["login"] = true;
				$_SESSION["datauser"] = "$username";
				header('location: index.php');
			} else {
				echo "
					<script>	
						alert('Password Salah!');
					</script>	
				";
			}
		} else {
			echo "
				<script>	
					alert('Username Salah!');
				</script>	
			";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php'; ?>
</head>
<body class="reg">

	<div class="container">
		<h1>Login</h1>
		<form action="" method="post">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" maxlength="16" required autocomplete="off">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" maxlength="16" required autocomplete="off">
			<button name="submit" type="submit" class="btn btn-primary">Masuk !</button>
		</form>
		<p>Belum Punya Akun ? <a href="registrasi.php">Registrasi!</a></p>
	</div>

</body>
</html>