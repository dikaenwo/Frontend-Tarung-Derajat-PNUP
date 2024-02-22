<!DOCTYPE html>
<html>
<head>
<title>Form Penilaian Layanan</title>
</head>
<body>
<h1>Form Penilaian Layanan</h1>
<label for="penilaian">Silahkan lengkapi form berikut untuk penilaian
layanan</label><br>
<input type="radio" name="penilaian" value="sangat_baik">Mr<br>
<input type="radio" name="penilaian" value="baik">Mrs<br>
<input type="radio" name="penilaian" value="cukup">Ms<br>
<form method="post" action="">
<label for="nama">Nama</label><br>
<input type="text" name="nama" required><br>
<label for="email">Email</label><br>
<input type="email" name="email" required><br>
<label for="layanan">Penilaian</label><br>
<select name="layanan">
<option value="A">Sangat Baik</option>
<option value="B">Baik</option>
<option value="C">Cukup</option>
<option value="D">Kurang</option>
<option value="E">Sangat Kurang</option>
</select><br>
<label for="komentar">Komentar</label><br>
<textarea name="komentar"></textarea><br>
<input type="submit" name="submit" value="Kirim">
</form>
<?php
// Proses simpan data ke database atau file
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$komentar = $_POST['komentar'];
// Lakukan proses penyimpanan data ke database atau file
// Contoh: simpan ke file dengan format CSV
$data = array($nama, $email, $layanan, $komentar);
$file = fopen('data_penilaian.csv', 'a');
fputcsv($file, $data);
fclose($file);
}
?>
</body>
</html>