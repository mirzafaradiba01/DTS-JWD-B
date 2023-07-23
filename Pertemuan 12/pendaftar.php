<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar Mahasiswa Digitalent Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Pendaftar Mahasiswa Digitalent Baru</h1>

        <?php
        $host = 'localhost'; 
        $user = 'root'; 
        $password = ''; 
        $database = 'data'; 

        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table-pendaftar'>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['jk'] . "</td>";
                echo "<td>" . $row['agama'] . "</td>";
                echo "<td>" . $row['sekolah_asal'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-data'>Belum ada pendaftar.</p>";
        }

        mysqli_close($conn);
        ?>

        <br>
        <br>
        <br>
        <a href="index.html" class="btn-back">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
