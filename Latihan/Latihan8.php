<?php
// konfigurasi koneksi 
$conn = mysqli_connect("localhost","root","","db_akademik");

// // koneksi ke database 
// $conn = new mysqli($host, $user, $pass, $db);

// cek koneksi 
if ($conn->connect_error) {
    die("Koenksi gagal: " . $conn->connect_error);
}

// query ambil semua data mahasiswa 
$sql = "SELECT nim, nama, umur FROM mahasiswa ORDER BY nim ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
if ($result->num_rows > 0) {
    ?>
<table border="1" cellpadding="5" cellspacing="0">
    <tr> 
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
    </tr>
<?php
while ($row = $result->fetch_assoc()){
    ?>
    <tr> 
        <td><?= $row['nim']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['umur']; ?></td>
    <tr>
<?php
}
}
?>
</body>
</html>

