<?php
    include "aksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rasya - Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" href="icons.png">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body>
    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <img src="logo.png" width="45px" heigth="50px" margin="" >
          
          <span class="h1 fw-bold mb-0">Rasya</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input id="inputUsername" type="text" class="form-control form-control-lg" name="username" required/>
              <label for="inputUsername">Username</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="inputPassword" class="form-control form-control-lg" name="password" required/>
              <label class="form-label" for="inputPassword">Password</label>
            </div>

            <div class="pt-1 mb-4">
            <button data-mdb-button-init data-mdb-ripple-init type="submit" name="masuk" class="btn btn-info btn-lg btn-block" style="color:navy">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="rasya.jpeg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>