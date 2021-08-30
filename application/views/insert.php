<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Insert</title>
  </head>
  <body>
  
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Code Igniter 3 | Insert Data</span>
  </div>
</nav>
<br>
<div class="container">

<form action="<?= base_url('Welcome/insertAction')?>" method="POST">
<?php
if(@$_GET["msg_error"] == 1){
  echo "<script>alert('Nip sudah digunakan.')</script>";
}elseif(@$_GET["msg_error"] == 2){
  echo "<script>alert('Nip harus 5 karakter.')</script>";
}elseif(@$_GET["msg_error"] == 3){
  echo "<script>alert('Nip harus angka.')</script>";
}elseif(@$_GET["msg_error"] == 4){
  echo "<script>alert('Nama Sudah Digunakan.')</script>";
}elseif(@$_GET["msg_error"] == 5){
  echo "<script>alert('Nama tidak boleh mengandung angka atau karakter khusus!.')</script>";
}elseif(@$_GET["msg_error"] == 6){
  echo "<script>alert('Email Sudah Digunakan!.')</script>";
}
?>
<div class="mb-3">
      <label for="nip" class="form-label">NIP</label>
      <input type="text" id="nip" minlength="5" maxlength="5" name="nip" class="form-control" required>
    </div>
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required>
  </div>
  <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select id="gender"  class="form-select" name="gender" required>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary float-end">Submit</button>

</form>
<a href="<?=base_url('Welcome/index')?>" class="btn btn-success">Back</a>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  
  </body>
</html>