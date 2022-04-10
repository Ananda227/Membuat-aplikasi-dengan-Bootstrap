<?php
include '../auth/auth.php';

$id = $_GET['id'];
$query = mysqli_query($mysqli, "DELETE FROM tb_mahasiswa WHERE id='$id'");

header (location :"home.php");
?>