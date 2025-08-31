<form action="<?=
base_url('update');
?>" method="post">

<table border="1">
<input type="hidden" name="id" value="<?= 
$mahasiswa['id'];
?>">

<tr>
    <td>nim</td>
    <td><input type="number" name="nim" value="<?= 
$mahasiswa['nim'];
?>"> </td>
</tr>

<tr>
    <td>nama</td>
    <td><input type="teks" name="nama" value="<?= 
$mahasiswa['nama'];
?>"> </td>
</tr>

<tr>
    <td>nim</td>
    <td><input type="number" name="umur" value="<?= 
$mahasiswa['umur'];
?>"> </td>
</tr>

<button>edit data</button>


</table>
</form>
