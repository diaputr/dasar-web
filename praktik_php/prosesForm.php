<?php 
	if (isset($_GET['nama']) AND isset($_GET['email'])) {
		$nama = $_GET['nama'];
		$email = $_GET['email'];
		$komentar = $_GET['komentar'];
		$isi_form = "&nama=$nama&email=$email$komentar=$komentar";
	} else {
		header("Location: formulir.php?error=variabel_belum_diset");
	}

	if (empty($nama)) {
		header("Location:formulir.php?error=nama_kosong".$isi_form);
	} elseif (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
		header("Location:formulir.php?error=nama_invalid".$isi_form);
	} elseif (empty($email)) {
		header("Location:formulir.php?error=email_kosong".$isi_form);
	} else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location:formulir.php?error=email_invalid".$isi_form);
		} else {
			echo "Nama : $nama <br> Email : $email <br> Komentar : $komentar";
		}
	}
?>