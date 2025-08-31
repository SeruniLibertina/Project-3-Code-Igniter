<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="<?=
base_url('tambah/');
?>">tambah</a>

<table border="1">
<tr>
    <td>nim</td>
    <td>nama</td>
    <td>umur</td>
    <td>aksi</td>
</tr>

<?php
    $i=1;
    foreach ($getMahasiswa as $s){
?>
<tr> 
    <td><?=$s['nim'];?></td>
    <td><?=$s['nama'];?></td>
    <td><?=$s['umur'];?></td>
<td>
<a href="<?=
base_url('detail/'. $s['id']);
?>">detail</a>

<a href="<?=
base_url('edit/'. $s['id']);
?>">edit</a>

<a href="<?=
base_url('hapus/'. $s['id']);
?>">hapus</a>
</td>
</tr>

<?php
    $i=$i+1;
    }
?>



</table>
<a href="<?=
base_url('detail/'. $s['id']);
?>"></a>

</body>
</html>