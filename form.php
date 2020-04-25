
<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION["id_petugas"])) {
    header("Location : http://localhost/covid-19/index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
<script src="http://localhost/covid-19/aset/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost/covid-19/aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/covid-19/aset/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="http://localhost/covid-19/aset/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="http://localhost/covid-19/aset/logad.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="login/login.php" role="login">
            <CENTER>
                <H5>Halo Petugas</H5>
                <H2>COVID-19</H2>
            </CENTER>
           <input type="text" id="#u" name="username" class="form-control nb" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
           <input type="password" class="form-control nb" name="password" placeholder="Password" id="myInput">
           <input type="checkbox" onclick="myFunction()"> Show Password
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" class="btn btn-lg btn-secondary btn-block" name="btnlogin">Login</button>
          <div>
            <a href="petugas/tambah.php">Create account</a>
          </div>  
        </form>
      </section>  
      </div>
      <div class="col-md-4"></div>
  </div>
  </div>
  <script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        feather.replace()
    </script>
</body>
  

</html>

<?php 
include 'aset/footer.php'
?>