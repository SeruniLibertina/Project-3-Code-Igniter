<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(!empty($mahasiswa) ):
?>

<table border="1">
<tr>
    <td>nim</td>
    <td>nama</td>
    <td>umur</td>
</tr>

<tr>
    <td><?= 
    esc($mahasiswa['nim']);
    ?></td>  
    <td><?= 
    esc($mahasiswa['nama']);
    ?></td> 
    <td><?= 
    esc($mahasiswa['umur']);
    ?></td> 
<tr>

</table>
<?php
else:
?>
<div class="alert alert-danger" role="alert">
    Data mahasiswa yang Anda cari tidak dapat ditemukan.
    </div>

<?php 
endif ;
?>

<a href="<?=
base_url('katapangmacet/');
?>">kembali ke halaman utama</a>

</body>
</html>