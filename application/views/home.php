<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Index</title>
  </head>
  <body>
  
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Code Igniter 3 | Selamat Datang <?php echo $this->session->userdata('nama'); ?></span>
    <span class="float-end"><a href="<?php echo base_url('Login/logout'); ?>" class="btn btn-primary">Logout</a></span>
  </div>
</nav>
<br>
<div class="container">

<a href="<?=base_url('Welcome/insertData')?>" class="btn btn-success">Insert</a>

<table class="table table-striped">
  <thead>
    <tr align="center">
      <th scope="col">No</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $i=1;
      ?>
       <?php 
        foreach($data_anggota as $d) :
       ?>
    <tr align="center">
      <td><?= $i ?></td>
      <td><?= $d->nip ?></td>
      <td><?= $d->nama ?></td>
      <td><?= $d->email ?></td>
      <td><?= $d->gender ?></td>
      <td>
          <a href="<?=base_url('Welcome/updateData/') . $d->nip?>" class="btn btn-warning">Update</a>
          <a href="<?=base_url('Welcome/deleteAction/') . $d->nip?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php 
    $i++;
endforeach;
    ?>
  </tbody>
</table>

</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>