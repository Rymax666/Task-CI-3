<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body>
  
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Code Igniter 3 | Update Data</span>
  </div>
</nav>
<br>
<div class="container">

<form action="<?=base_url('Welcome/editAction')?>" method="POST">

<div class="mb-3">
      <label for="nip" class="form-label">NIP</label>
      <input type="text" id="nip" class="form-control" value="<?=$data_anggota->nip?>" disabled>
      <input type="hidden" name="nip" value="<?=$data_anggota->nip?>>
    </div>
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="<?=$data_anggota->nama?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="<?=$data_anggota->email?>">
  </div>
  <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select id="genderg" class="form-select" name="gender">
          <option value="<?=$data_anggota->gender?>"><?=$data_anggota->gender?></option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary float-end">Submit</button>

</form>

<a href="<?=base_url('welcome/index')?>" class="btn btn-success">Back</a>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>