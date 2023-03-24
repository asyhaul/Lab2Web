<!DOCTYPE html>
<html>
<head>
	<title>Output Pekerjaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Output Pekerjaan</h2>
		<?php
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];

		// Menghitung umur berdasarkan tanggal lahir
		$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

		// Menentukan gaji berdasarkan pekerjaan
		switch ($pekerjaan) {
			case 'Programmer':
				$gaji = 'Rp 10.000.000,-';
				break;
			case 'Desainer':
				$gaji = 'Rp 9.000.000,-';
				break;
			case 'Manajer':
				$gaji = 'Rp 15.000.000,-';
				break;
			case 'Operator':
					$gaji = 'Rp 5.000.000,-';
					break;
			default:
				$gaji = '-';
				break;
		}
		?>
		<div>
			<label>Nama:</label>
			<span><?php echo $nama; ?></span>
		</div>
		<div>
			<label>Umur:</label>
			<span><?php echo $umur; ?> tahun</span>
		</div>
		<div>
			<label>Pekerjaan:</label>
			<span><?php echo $pekerjaan; ?></span>
		</div>
		<div>
			<label>Gaji:</label>
			<span><?php echo $gaji; ?></span>
		</div>
		<a href="php_dasar.php">Kembali ke Form</a>
	</div>
</body>
</html>