<?php
include'konek.php';
$query = "SELECT * FROM perpus";
$hasil = mysqli_query($konek,$query);
$num = mysqli_num_rows($hasil);

?>

<html>
<head>
<title>Aplikasi Buku Tamu </title>
</head>
<body>
<h1>Aplikasi Buku Tamu</h1>    
<table border="1">
<tr>


<th> No</th>
<th>tanggal</th>
<th>Nama</th>
<th>Email</th>
<th>Komentar</th>
<th>Aksi</th>
</tr>
<?php
if($num > 0)
{
    $no=1;
    while($data = mysqli_fetch_assoc($hasil)){

    
?>
<tr>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['komentar']; ?></td>
<td><a href="update.php?id=<?php echo $data['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
</tr>


<?php
    }

} else {
?>
<td colspan='3'>Tidak ada data</td>

<?php
}
?>
</table>
</body>
</html>