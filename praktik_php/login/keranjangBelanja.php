<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Keranjang Belanja</h2>
<?php  
	$beliNovel = $_COOKIE['beliNovel'];
	$beliBuku = $_COOKIE['beliBuku'];

	echo "Jumlah novel : ".$beliNovel."<br>";
	echo "Jumlah buku : ".$beliBuku;
?>
</body>
</html>