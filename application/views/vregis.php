<html>
	<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<title>Form Register</title>
		
	</head>
	<body>

    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Code Igniter 3 | Register</span>
  </div>
</nav>
<br>

<div class="container">
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register
			</div>
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url('Register/proses'); ?>">
                <?php 
                if(@$_GET["msg_error"] == 1){
                    echo "<script>alert('Nama sudah digunakan.')</script>";
                  }
                ?>
                <div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
					</div>
                    <br>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
                    <br>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
                    <br>
					<button type="submit" class="btn btn-primary float-end">Register</button>
                    <a href="<?=base_url()?>" class="btn btn-success">Back</a>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>