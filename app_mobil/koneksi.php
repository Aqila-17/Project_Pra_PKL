<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "db_mobil";

$koneksi = mysqli_connect($server, $user, $password, $database);

if($koneksi){
    echo "berhasil terkoneksi";
}else{
    echo "gagal terkoneksi";
}

?>