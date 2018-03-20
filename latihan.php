<?php

	$nama="fulan";
	$umur=20;

	echo "Nama saya $nama dan Umur saya $umur";
	// konstanta
	define("alamat","bojong soang");
	echo "<br/>";
	echo alamat;
	echo "<br/>";

	//operator
	$nilai1= 10;
	$nilai2=12;

	$hasil_tambah =$nilai1+$nilai2;
	$hasil_kurang =$nilai1-$nilai2;
	$hasil_kali =$nilai1*$nilai2;
	$hasil_bagi =$nilai1/$nilai2;

	echo "Hasil penjumlahan= $hasil_tambah Hasil Pengurangan =$hasil_kurang perkalian=$hasil_kali Hasil Pembagian=$hasil_bagi";
		echo "<br/>";
	//percabagan

	if($nilai1>=$nilai2){
		echo "nilai pertama lebih besar";
	}else{
		echo "nilai pertama lebih kecil";
	}
	//swicth
	echo "<br/>";
	$nilai="B";
	switch($nilai){
		case 'A':
			echo "Nilai A";
			break;

		case 'B':
			echo "Nilai B";
			break;
		default:
		echo "Tidak Ada Data yang dipilih";
			break;
	}
	echo "<br/>";
	for($i=1; $i <= 10; $i++){
		echo "Saya huruf ke ".$i;
	}
	echo "<br/>";

	$b=1;
	while ($b <= 10) {
		echo "Saya huruf ke".$b;
		$b++;
	
	}
	echo "<br/>";
	//do while
	
	do{
		echo("WK");
		$b++;
	}
	while ( $b <= 10);
// ARRAY DAN FORECH
echo "<br/>";
	$bahasa=['Indonesia','Inggris','Arab','jepang'];

	foreach ($bahasa as $d) {
		echo $d ."<br/>";
	}
	//array assotiatife
	$biodata=[
			'nama'=> "deden",
			'alamat'=>"jl.cikoneng",
			'umur'=> 10
	];

	echo $biodata['nama'];
//function

	function penjumlahan(){
		echo "function jimlah";
	}

	penjumlahan();
?>