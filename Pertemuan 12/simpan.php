<?php

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'data'; 

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];


$sql = "INSERT INTO mahasiswa (nama, alamat, jk, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah_asal')";
if (mysqli_query($conn, $sql)) {
    echo "Pendaftaran berhasil. Terima kasih telah mendaftar!";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
