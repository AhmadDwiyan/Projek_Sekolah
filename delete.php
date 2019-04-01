<?php
include 'konek.php';
$id = $_GET['id'];
$q = "DELETE FROM perpus WHERE id = '$id'";
$query = mysqli_query($konek,$q);

if($query){

echo "berhasil delete Data<br> <a href='data.php'> Lihat data</a>'";
} else {
    echo "Gagal<br> <a href='data.php'> Lihat data</a>'";
}

?>