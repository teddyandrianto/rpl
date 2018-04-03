<?php 
session_start();
		require_once('../koneksi.php');
		if(isset($_SESSION['username'])){
		if($_SESSION['typeuser']=='user'){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		echo "Selama datang : ".$_SESSION['username']. " Anda login sebagai ".$_SESSION['typeuser'];

	?>
	<br>
	<a href="logout.php">logout</a>

</body>
</html>

<?php }else{
	header("location:../index.php");

}}else{
	header("location:../index.php");
} ?>