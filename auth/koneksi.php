<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "Dbkampus";

$mysqli    = mysqli_connect($host, $user, $pass, $db);
if (!$mysqli) { 
    die("Tidak bisa terkoneksi ke database" . mysqli_connect_error());   
}
//echo "koneksi sukses";
?>