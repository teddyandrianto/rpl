<?php 
if(isset($_POST['submit'])){
$u ="wawan";
$p = "wawan123";
$username =$_POST['username'];
$password=$_POST['password'];

if($username== $u && $password ==$p){
 	 echo 'Login berhasil';
}else{
	echo "login gagal";
}
}
?>

<form action="form.php" method="POST">
	Username :<input type="text" name="username"><br/>
	Password :<input type="Password" name="password"><br/>
	<button type="submit" name="submit">Input</button>
</form>