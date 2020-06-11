<?php 

	include 'function.php';

	if ( isset($_POST["submit"]) ) {
		if ( registrasi($_POST) > 0 ) {
			echo "
				<script>
					alert('Registrasi berhasil!');
					window.location = 'login.php';
				</script>
			";
		} else {
			echo mysqli_error($conn);
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
		<h1>Registrasi</h1>
		<form action="" method="post" enctype="multipart/form-data>
			<label for="nama">Nama Lengkap</label>
			<input type="text" name="nama" id="nama" required autocomplete="off">
			<label for="username">Username (Max.16)</label>
			<input type="text" name="username" id="username" maxlength="16" required autocomplete="off">
			<label for="password">Password (Max.16)</label>
			<input type="password" name="password" id="password" maxlength="16" required autocomplete="off">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" required autocomplete="off">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin">
				<option value="laki-laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
			<button name="submit" type="submit" class="btn btn-primary">Daftar !</button>
		</form>
		<p>Sudah Punya Akun ? <a href="login.php">Login!</a></p>
	</div>

</body>
</html>