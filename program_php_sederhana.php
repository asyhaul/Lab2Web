<!DOCTYPE html>
<html>
<head>
	<title>Form Input Pekerjaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Form Input Pekerjaan</h2>
		<form method="POST" action="proses.php">
			<div>
				<label for="nama">Nama:</label>
				<input type="text" id="nama" name="nama" required>
			</div>
			<div>
				<label for="tgl_lahir">Tanggal Lahir:</label>
				<input type="date" id="tgl_lahir" name="tgl_lahir" required>
			</div>
			<div>
				<label for="pekerjaan">Pekerjaan:</label>
				<select id="pekerjaan" name="pekerjaan">
					<option value="Programmer">Programmer</option>
					<option value="Desainer">Desainer</option>
					<option value="Manajer">Manajer</option>
					<option value="Manajer">Operator</option>
				</select>
			</div>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
