<?php
include '../auth/koneksi.php';
$id=$_GET['id'];
$query = mysqli_query($mysqli,"SELECT * from tb_mahasiswa WHERE id = '$id'");
$result = mysqli_fetch_array($query);
?>
<center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h2>Form Edit Data</h2>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Siskampus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<form action="edit-data.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="nama" value="<?php echo $result['nama'];?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">NIM</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="NIM" name="nim" value="<?php echo $result['nim'];?>" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Semester</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Semester" name="semester" value="<?php echo $result['semester'];?>"required>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Username</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Username" name="username" value="<?php echo $result['username'];?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Password</label>
      <input type="text" class="form-control" id="inputState" placeholder="Password" name="password" value="<?php echo $result['password'];?>" required>
    </div>
   
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</center>
