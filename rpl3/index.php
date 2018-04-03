<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<form action="" method="POST">
		<div><h2>REGISTER</h2>
			<input type="text" name="username" required>
			<input type="password" name="password" required>
			<button type="submit" name="register">Register</button>
		</div>
		<a href="login.php">login</a>
	</form>

	<?php

		require_once('koneksi.php');
		if(isset($_POST['register'])){
			$username =$_POST['username'];
			$password =$_POST['password'];

			$options =array("cost"=>4);
			$hasilPassword = password_hash($password,PASSWORD_BCRYPT,$options);

			$insert = $db->query("INSERT INTO user(username, password, typeuser) VALUES('$username','$hasilPassword','user')");
			if($insert){
				echo "register Berhasil";
			}else{
				echo "register gagal";
			}

		}
	?>

</body>
</html>