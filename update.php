<?php
include'konek.php';
$id = $_GET['id'];

$q = "SELECT * FROM perpus WHERE id='$id'";

$query = mysqli_query($konek,$q);

$row = mysqli_fetch_assoc($query);
?>

<html>
<head>
<title>Buku Tamu PHP MYSQL</title>
</head>
<body>
 <h2>Formulir Buku Tamu </h2>
 <hr>   
<form method="post" action="bukutamu_update.php">
<table  width="494" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="78">Nama</td>
<td width="10">:</td>
<td width="406">
<input type="text" name="nama" size="25" maxlength="50" value="<?php echo $row['nama']; ?>">
</td>

</tr>
<tr>
<td>Email</td>
<td>:</td>
<td>
<input type="text" name="email" size="25" maxlength="50" value="<?php echo $row['email']; ?>">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
</td>

</tr>
<tr>
<td>Komentar</td>
<td>:</td>
<td>
<textarea name="komentar" id="" cols="27" rows="5" ><?php echo $row['komentar']; ?></textarea>
</td>

</tr>
<tr>
<td> <input type="submit" value="KIRIM !!!" name="submit"></td>
<td> &nbsp; </td>
<td> &nbsp;</td>
</tr>
</table>
</form>
</body>
</html>