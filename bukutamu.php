<?php
include'konek.php';
$tanggal = date("d M Y H:m:s");

$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$sql = "INSERT INTO `perpus`(`tanggal`, `nama`, `email`, `komentar`) VALUES ('$tanggal','$nama','$email','$komentar')";

$query = mysqli_query($konek,$sql);

if($query){

    echo "<b>Inilah data-data yang tadi anda simpan:</b>";
    echo "<br>";
    echo "<hr>";
    echo "$tanggal";
    echo "<br>";
    echo "Nama : $nama";
    echo"<br>";
    echo "Email : $email";
    echo "<br>";
    echo "Komentar : $komentar";
    echo "<HR>";
    echo"Data berhasil disimpan";
    echo "<a href='data.php'> Kembali</a>";
} else {
echo "Data gagal disimpan";

}

?>