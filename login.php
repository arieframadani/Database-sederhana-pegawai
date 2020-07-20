<?php
require "koneksi.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
  
    <div class="splash-container">
          <form action="cek_login.php" method="POST">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="admin/assets/images/logo-visit.png" alt="logo" style="width: 250px;"></a><span class="splash-description"></span></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                    </div>
                   
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
               
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="index.html" class="footer-link"><i class="fas fa-arrow-circle-left"></i> Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</form>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>

<?php
?> <script src="assets/js/sweetalert2.all.min.js"></script> <?php

if ($_GET['m'] == "password") {?>
    <script type="text/javascript">
      Swal.fire({
        type: 'info',
        title: 'Usernamenya benar, tapi...',
        text: 'Password Tidak Sesuai!',
      })
    </script>
<?php }

if ($_GET['m'] == "username") {?>
    <script type="text/javascript">
      Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Username Tidak Sesuai!',
      })
    </script>
<?php }

?>