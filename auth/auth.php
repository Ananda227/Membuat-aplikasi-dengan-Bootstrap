<?php
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['user'] = $_POST['username'];
$query = mysqli_query($mysqli,"SELECT * FROM tb_mahasiswa WHERE username = '$username' AND password = '$password' ");
$result = mysqli_num_rows($query);

if($result > 0){
    header("location:../app/home.php");
}
else{
    header("location:../index.php?pesan=error");
}
?>