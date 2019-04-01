<?php

include 'konek.php';

$id_dosen = $_POST['id'];
$nama_dosen = $_POST['nama'];
$telp = $_POST['email'];
$komen = $_POST['komentar'];

$jalan = "UPDATE perpus SET nama = '$nama_dosen', email = '$telp', komentar = '$komen' WHERE id = $id_dosen";

$result = mysqli_query($konek, $jalan);

$num = mysqli_affected_rows($konek);

if($num > 0)
{
    echo "Berhasil update data <br>";
}
else
{
    echo "Gagal update data <br>";
}
echo "<a href='data.php'>Lihat Data</a>";

?>