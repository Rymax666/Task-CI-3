<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Admin</title>
    <style>
        body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #1B2631;
}

.box{
  width: 300px;
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
  border-radius: 20px 20px;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  background: linear-gradient(
    to right,
    hsl(1 100% 50%),
    hsl(100 100% 50%)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #D4AC0D;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.5s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  border-color: #A04000;
  width: 250px;
}
.box input[type = "text"]:hover,.box input[type = "password"]:hover{
  border-color: #A04000;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #D4AC0D;
  padding: 14px 40px;
  outline: none;
  color: white;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:focus{
  border-color: #D4AC0D;
}
.box input[type = "submit"]:hover{
  background: #D4AC0D;
  border-radius: 24px;
}

a {
  font-family: "Dank Mono", ui-monospace, monospace;
  background: linear-gradient(
    to right,
    hsl(98 100% 62%),
    hsl(204 100% 59%)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}

    </style>
  </head>
  <body>
  <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
 
				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo "<script>alert('Registrasi Berhasil! Silahkan Login');</script>";
				}
				?>
    <form class="box" action="<?=base_url('Login/proses')?>" method="post">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
      <input type="submit" value="Login">
      <a href="<?=base_url('Register/index')?>">Register</a>
    </form>
   </body>
</html>
