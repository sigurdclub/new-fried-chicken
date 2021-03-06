<?php
include_once "../function.php";

if(isset($_POST["tambah"])){
  if(tambahAyam($_POST)){
    echo "
      <script>
          alert('data berhasil ditambah!');
          document.location.href = 'products.php';
      </script>";
  }else{
    echo "
      <script>
          alert('data gagal ditambah!');
          document.location.href = 'products.php';
      </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Product</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/f10df6ea72.js" crossorigin="anonymous"></script>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- css mind -->
  <link rel="stylesheet" href="../style.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- css bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #FFDFAF;">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt" style="color: black;"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 side-text">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="text-decoration: unset; background-color: #F2BB7B;">
      <!-- <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <h4 class="brand-text font-weight-light" style="text-align: center;">New Fried Chicken</h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"  style="background-color: #F2BB7B;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/images/profile icon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="text-decoration: unset; color: black;">Riska</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-text" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          
          <li class="nav-header" style="color: black;">Daftar</li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
            <i class=" nav-icon fa-solid fa-house"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pesanan/pesanan.php" class="nav-link">
            <i class="nav-icon fa-solid fa-cart-shopping"></i>
              <p>Pesanan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../products/products.php" class="nav-link">
            <i class="nav-icon fa-solid fa-drumstick-bite"></i>
              <p>Products</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #FFDFAF;">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col">
            <h1 class="" style="text-align: center; margin-bottom: 2%; color: black;">Form Tambah </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Last Content -->

    <!-- Isi konten -->
    <section class="content">
        <!-- Container forms tambah -->
        <div class="row" style="justify-content: center;width: 100%;" >
          <div class="card" style="width: 50%; background-color: #F2BB7B;">
            <div class="card-body">
            <form class="row g-3 form-products" action="" method="POST" enctype="multipart/form-data">
              <div class="col-12">
                <label for="inputAddress" class="form-label" style="color: black;">Nama Ayam</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Apple..." name="nama_ayam"style="background-color: white; color: black;" >
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: black;">Stok</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="1...." name="stok" style="background-color: white; color: black;">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: black;">Harga</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="15000" name="harga" style="background-color: white; color: black;">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: black;">Size</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="1...." name="size" style="background-color: white; color: black;">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: black;">Gambar</label>
                <input type="file" class="form-control" id="inputAddress2" placeholder="" name="gambar" style="background-color: white; color: black;">
              </div>
              <div class="col-12" style="display: flex; justify-content: right;">
              <button type="submit" class="btn btn-tambah" name="tambah" >Tambah</button>
              </div>
            </form>
            </div>
          </div>
      </div>
              
              

      <!-- container content -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: #FFDFAF;">
        <div class="float-right d-none d-sm-inline-block">
       
        <b style="color: black;">@SigurdClub</b><span style="color: black;"> 20.05.22</span>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard2.js"></script>

<!-- javascript bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>