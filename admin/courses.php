<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
  <link rel="stylesheet" href="../assets/DataTables/datatables.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="contact.php" class="nav-link">Kontak</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/img/prof.jpg" class="img-circle elevation-2" alt="User Image" style="width: 30px;">
            <span class="availability-status online"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="profileDropdown" style="right:0; left:auto;">
            <div class="dropdown-header bg-light py-2">
              <strong>Muhamad Dicky</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa-solid fa-user"></i> Profile </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa-solid fa-right-from-bracket"></i> Signout </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../assets/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kelompok Web</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/img/prof.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Muhamad Dicky</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fa-solid fa-house"></i>
                <p>
                  Dashboard
                </p>
              </a>

            </li>
            <li class="nav-header">SISWA</li>

            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link active">
                <i class="nav-icon fa-solid fa-book"></i>
                <p>
                  Kursus
                  <span class="right badge badge-danger">Baru</span>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="tb_jadwal.php" class="nav-link">
                <i class="nav-icon fa-solid fa-calendar-days"></i>
                <p>Jadwal</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pembayaran.php" class="nav-link">
                <i class="nav-icon fa-solid fa-cart-shopping"></i>
                <p>Pembayaran</p>
              </a>
            </li>

            <li class="nav-header">ADMIN</li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-database"></i>
                <p>
                  Data Kursus
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="tb_course.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kursus</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tb_tugasAkhir.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Tugas Akhir</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-spin fa-gear icon-md"></i>
                <p>
                  User
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="tb_siswa.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tb_tutor.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tutor</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">
                <i class="nav-icon fa-solid fa-headset"></i>
                <p>Kontak</p>
              </a>
            </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- content wrapper -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0"><i class="fa-solid fa-window-restore"></i> Courses</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Courses</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- small boxes -->
          <div class="row">
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/b1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong> Front End</strong></h4>
                  <p class="card-text">Belajar FrontEnd (html,css,framework), reactJS.</p>
                  <a href="courses/frontEnd.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/b4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Back End</strong></h3>
                    <p class="card-text">Belajar tentang database MYSQL melalui php dan javascript.</p>
                    <a href="courses/backEnd.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/b2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Mobile Development</strong></h4>
                  <p class="card-text">Belajar pemrograman kotlin, flutter dan app dev.</p>
                  <a href="courses/mobile.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/b3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Game Development</strong></h3>
                    <p class="card-text">.</p>
                    <a href="courses/game.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/c4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Product Management</strong></h4>
                  <p class="card-text">Belajar product management dan menciptakan produk inovasi digital.</p>
                  <a href="courses/product.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/c5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>UI/UX Design</strong></h3>
                    <p class="card-text">Belajar tentang tools figma dan belajar mendesain wireframe.</p>
                    <a href="courses/uiux.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/c1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Machine Learning</strong></h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="courses/machineLearning.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 stretch-card grid-margin">
              <!-- small box -->
              <div class="small-box justify-content-center">
                <img src="../assets/img/c3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title"><strong>Business Intelllegent</strong></h4>
                  <p class="card-text">Belajar tentang sql dan big data untuk menganalisa bisnis digital.</p>
                  <a href="courses/business.php" class="btn btn-primary">Info Selanjutnya</a>
                </div>
              </div>
            </div>
            <!-- ./col -->


          </div>
          <!-- ./row -->
        </div>
    </div>

    </section>
  </div>



  <footer class="main-footer">
    <strong>Kelompok Web &copy; 2022.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Tema dari <a href="https://adminlte.io">AdminLTE.io</a></b>
    </div>
  </footer>
  </div>


  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../asssts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <script src="../assets/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../assets/js/demo.js"></script>
</body>

</html>