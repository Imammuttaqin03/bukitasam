<?php 
include 'config/koneksi.php';
session_start();

if (isset($_SESSION['status'])) {
  header('location:index.php');
}

if(isset($_POST["submit"])){

  $username=$_POST["username"];
  $password=$_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$username'");

  //cek username
  if(mysqli_num_rows($result) === 1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if($password == $row["password"]){
       if(isset($_POST['submit'])){
                if($row ['status'] == 'admin'){
                    $_SESSION['status'] = $row['status'];
                    $_SESSION['nama'] = $row['nama'];
                    header('location:index.php');
                }
                else{
                    $_SESSION['status'] = $row['status'];
                    $_SESSION['nama'] = $row['nama'];
                    header('location:index.php');
                }  
            }
      exit;
    }else{
      echo "<script>alert('username/password salah');</script>";
    }
  }

  $error=true;

}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <img src="assets/images/icon/logo.png" style="width: 80%; height: 80%;">
                        <h4>Silahkan Login</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" name="username">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Password</label>
                            <input type="password" name="password">
                            <i class="ti-lock"></i>
                        </div><!-- 
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="selected">Level </option>
                                <option value="admin">Admin </option>
                                <option value="admin">Pimpinan </option>
                                <option value="admin">Ketua </option>
                            </select>   
                        </div> -->
                        <div class="submit-btn-area mt-5">
                            <button type="submit" name="submit">Login <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>