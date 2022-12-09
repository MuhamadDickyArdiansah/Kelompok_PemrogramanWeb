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
            <a class="dropdown-item" href="../config/logout.php">
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
              <a href="courses.php" class="nav-link">
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
              <a href="pembayaran.php" class="nav-link active">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><i class="fa-solid fa-cart-shopping"></i> Pembayaran</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Pembayaran</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Note:</h5>
                Halaman ini telah disempurnakan untuk dicetak. Klik tombol cetak di bagian bawah untuk menguji.
              </div>
              <!-- Main content -->
              <div class="invoice p-3 mb-3 mt-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="fas fa-globe"></i> Kelompok Web, Inc.
                      <small class="float-right"><?php echo date('l, d-m-Y'); ?></small>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    Dari
                    <address>
                      <strong>Admin, Inc.</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Phone: (804) 123-5432<br>
                      Email: kelompokWeb@itenas.ac.id
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    Kepada Yth.
                    <address>
                      <strong>John Doe</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Phone: (555) 539-1037<br>
                      Email: john.doe@example.com
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> 4F3S8J<br>
                    <b>Tanggal jatuh tempo:</b> <?php echo date(' d/m/Y'); ?><br>
                    <b>Nomor VA:</b> 968-34567
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Course</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
                      include '../config/koneksi.php';
                      error_reporting(E_ALL ^ E_WARNING || E_NOTICE);

                      $no = 1;
                      $data = mysqli_query($koneksi, "select  * from pembayaran");
                      while ($d = mysqli_fetch_array($data)) {
                        $jumlah += $d['harga'];
                        $pajak = $jumlah * 0.007;
                        $total = $jumlah + $pajak;
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['nama_course']; ?></td>
                          <td>Rp. <?php echo number_format($d['harga']); ?></td>
                          <td>
                            <a class="btn btn-danger btn-sm" href="../config/transaksi/hapusPembayaran.php?id=<?php echo $d['id_pembayaran']; ?>" onclick="return confirm('Yakin hapus kursus <?php echo $d['nama_course'] ?> ?');"><i class="fa-solid fa-trash"></i> HAPUS</a>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-5">
                    <p class="lead">Metode Pembayaran:</p>
                    <img src="../assets/img/credit/gopay.png" alt="gopay">
                    <img src="../assets/img/credit/qris.png" alt="qris" style="width: 60px;">
                    <img src="../assets//img/credit/mastercard.png" alt="Mastercard">
                    <img src="../assets/img/credit/paypal2.png" alt="Paypal">
                    <img src="../assets/img/credit/bni.png" alt="Paypal">
                    <img src="../assets/img/credit/bri.png" alt="Paypal" style="width: 51px;">
                    <img src="../assets/img/credit/bca.png" alt="Paypal" style="width: 51px;">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                      plugg
                      dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-7">
                    <p class="lead">Jatuh Tempo <?php echo date(' d/m/Y'); ?></p>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th>Jumlah Harga </th>
                          <td>
                            Rp. <?php echo number_format($jumlah); ?>
                          </td>
                        </tr>

                        <tr>
                          <th>Pajak (0.7%)</th>
                          <td>Rp. <?php echo number_format($pajak); ?></td>

                        </tr>
                        <tr>
                          <th>Metode pembayaran:</th>
                          <td>
                            <select class="form-select" aria-label="Default select example">
                              <option value="1">Gopay</option>
                              <option value="2">QRIS</option>
                              <option value="3">MasterCard</option>
                              <option value="3">PayPal</option>
                              <option value="3">BNI</option>
                              <option value="3">BriVA</option>
                              <option value="3">BCA</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <th>Total:</th>
                          <td>Rp. <?php echo number_format($total); ?></td>

                        </tr>

                      </table>

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a href="print_pembayaran.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                      Payment
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                      <i class="fas fa-download"></i> Generate PDF
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


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
  <script src="../assets/DataTables/datatables.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../assets/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../assets/js/pages/dashboard.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();

    });
  </script>
</body>

</html>