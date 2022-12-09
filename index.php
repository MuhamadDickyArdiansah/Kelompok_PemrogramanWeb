<?php
session_start();

?>

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
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">

  <style>
    section {
      padding: 60px 0;
      overflow: hidden;
    }

    .section-header {
      text-align: center;
      padding-bottom: 40px;
    }

    .section-header h2 {
      font-size: 13px;
      letter-spacing: 1px;
      font-weight: 700;
      margin: 0;
      color: #4154f1;
      text-transform: uppercase;
    }

    .section-header p {
      margin: 10px 0 0 0;
      padding: 0;
      font-size: 38px;
      line-height: 42px;
      font-weight: 700;
      color: #012970;
    }

    @media (max-width: 768px) {
      .section-header p {
        font-size: 28px;
        line-height: 32px;
      }
    }

    .hero {
      width: 100%;
      height: 90vh;
      background: url(assetsIndex/img/hero-bg.png) top center no-repeat;
      background-size: cover;
    }

    .hero h1 {
      margin: 0;
      font-size: 48px;
      font-weight: 700;
      color: #012970;
    }

    .hero h2 {
      color: #444444;
      margin: 15px 0 0 0;
      font-size: 26px;
    }

    .hero .btn-get-started {
      margin-top: 30px;
      line-height: 0;
      padding: 15px 40px;
      border-radius: 4px;
      transition: 0.5s;
      color: #fff;
      background: #4154f1;
      box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }

    .hero .btn-get-started span {
      font-family: "Nunito", sans-serif;
      font-weight: 600;
      font-size: 16px;
      letter-spacing: 1px;
    }

    .hero .btn-get-started i {
      margin-left: 5px;
      font-size: 18px;
      transition: 0.3s;
    }

    .hero .btn-get-started:hover i {
      transform: translateX(5px);
    }

    .hero .hero-img {
      text-align: right;
    }

    @media (min-width: 1024px) {
      .hero {
        background-attachment: fixed;
      }
    }

    @media (max-width: 991px) {
      .hero {
        height: auto;
        padding: 60px 0 60px 0;
      }

      .hero .hero-img {
        text-align: center;
        margin-top: 80px;
      }

      .hero .hero-img img {
        width: 80%;
      }
    }

    @media (max-width: 768px) {
      .hero {
        text-align: center;
      }

      .hero h1 {
        font-size: 32px;
      }

      .hero h2 {
        font-size: 24px;
      }

      .hero .hero-img img {
        width: 100%;
      }
    }

    .about .content {
      background-color: #f6f9ff;
      padding: 40px;
    }

    .about h3 {
      font-size: 14px;
      font-weight: 700;
      color: #4154f1;
      text-transform: uppercase;
    }

    .about h2 {
      font-size: 24px;
      font-weight: 700;
      color: #012970;
    }

    .about p {
      margin: 15px 0 30px 0;
      line-height: 24px;
    }

    /*--------------------------------------------------------------
# Recent Blog Posts
--------------------------------------------------------------*/
    .recent-blog-posts .post-box {
      box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
      transition: 0.3s;
      height: 100%;
      overflow: hidden;
      padding: 30px;
      border-radius: 8px;
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .recent-blog-posts .post-box .post-img {
      overflow: hidden;
      margin: -30px -30px 15px -30px;
      position: relative;
    }

    .recent-blog-posts .post-box .post-img img {
      transition: 0.5s;
    }

    .recent-blog-posts .post-box .post-date {
      font-size: 16px;
      font-weight: 600;
      color: rgba(1, 41, 112, 0.6);
      display: block;
      margin-bottom: 10px;
    }

    .recent-blog-posts .post-box .post-title {
      font-size: 24px;
      color: #012970;
      font-weight: 700;
      margin-bottom: 18px;
      position: relative;
      transition: 0.3s;
    }

    .recent-blog-posts .post-box .readmore {
      display: flex;
      align-items: center;
      font-weight: 600;
      line-height: 1;
      transition: 0.3s;
    }

    .recent-blog-posts .post-box .readmore i {
      line-height: 0;
      margin-left: 4px;
      font-size: 18px;
    }

    .recent-blog-posts .post-box:hover .post-title {
      color: #4154f1;
    }

    .recent-blog-posts .post-box:hover .post-img img {
      transform: rotate(6deg) scale(1.2);
    }


    /*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/

    .team .member {
      overflow: hidden;
      text-align: center;
      border-radius: 5px;
      background: #fff;
      box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
      transition: 0.3s;
    }

    .team .member .member-img {
      position: relative;
      overflow: hidden;
    }

    .team .member .member-img:after {
      position: absolute;
      content: "";
      left: 0;
      bottom: 0;
      height: 100%;
      width: 100%;
      background: url(../img/team-shape.svg) no-repeat center bottom;
      background-size: contain;
      z-index: 1;
    }

    .team .member .social {
      position: absolute;
      right: -100%;
      top: 30px;
      opacity: 0;
      border-radius: 4px;
      transition: 0.5s;
      background: rgba(255, 255, 255, 0.3);
      z-index: 2;
    }

    .team .member .social a {
      transition: color 0.3s;
      color: rgba(1, 41, 112, 0.5);
      margin: 15px 12px;
      display: block;
      line-height: 0;
      text-align: center;
    }

    .team .member .social a:hover {
      /* color: rgba(1, 41, 112, 0.8); */
      color: #007bff;
    }

    .team .member .social i {
      font-size: 18px;
    }

    .team .member .member-info {
      padding: 10px 15px 20px 15px;
    }

    .team .member .member-info h4 {
      font-weight: 700;
      margin-bottom: 5px;
      font-size: 20px;
      color: #012970;
    }

    .team .member .member-info span {
      display: block;
      font-size: 14px;
      font-weight: 400;
      color: #aaaaaa;
    }

    .team .member .member-info p {
      font-style: italic;
      font-size: 14px;
      padding-top: 15px;
      line-height: 26px;
      color: #5e5e5e;
    }

    .team .member:hover {
      transform: scale(1.08);
      box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    }

    .team .member:hover .social {
      right: 8px;
      opacity: 1;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

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
        <a href="login.php" class="btn btn-primary">Login</a>


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="assets/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kelompok Web</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-house"></i>
                <p>
                  Login
                </p>
              </a>

            </li>
          </ul>

        </div>


      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- content wrapper -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
              <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                  <h1 data-aos="fade-up">Kami menawarkan solusi modern untuk mengembangkan skill programming Anda
                  </h1>
                  <h2 data-aos="fade-up" data-aos-delay="400">Kami adalah tim programming berbakat yang membuat situs web dengan Bootstrap</h2>
                  <div data-aos="fade-up" data-aos-delay="600">
                    <div class=" mt-2 text-lg-start">
                      <a href="login.php" class="btn btn-primary ">
                        <span>Memulai <i class="fas fa-arrow-right"></i></span>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                  <img src="assets/img/Coding _Flatline.png" class="img-fluid" alt="">
                </div>
              </div>
            </div>

          </section><!-- End Hero -->

          <main id="main">

            <section id="about" class="about">

              <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                  <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                      <h3>Siapa Kami</h3>
                      <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                      <p>
                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                      </p>
                    </div>
                  </div>

                  <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assetsIndex/img/about.jpg" class="img-fluid" alt="">
                  </div>

                </div>
              </div>

            </section><!-- End About Section -->


            <section id="recent-blog-posts" class="recent-blog-posts">

              <div class="container" data-aos="fade-up">

                <header class="section-header">
                  <h2>Kursus</h2>
                  <p>Kursus paling populer di situs kami</p>
                </header>

                <div class="row">

                  <div class="col-lg-4">
                    <div class="post-box">
                      <div class="post-img"><img src="assets/img/b1.jpg" class="img-fluid" alt=""></div>
                      <h3 class="post-title">Front End Development</h3>
                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="post-box">
                      <div class="post-img"><img src="assets/img/c1.jpg" class="img-fluid" alt=""></div>

                      <h3 class="post-title">Machine Learning</h3>
                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="post-box">
                      <div class="post-img"><img src="assets/img/c5.jpg" class="img-fluid" alt=""></div>
                      <h3 class="post-title">UI / UX Designer</h3>
                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                </div>

              </div>

            </section><!-- End Recent Blog Posts Section -->

            <section id="team" class="team">

              <div class="container" data-aos="fade-up">

                <header class="section-header">
                  <h2>Tutor</h2>
                  <p>Tutor terbaik</p>
                </header>

                <div class="row gy-4 ">

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <div class="member-img">
                        <img src="assetsIndex/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                          <a href=""><i class="fa-brands fa-facebook"></i></a>
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                          <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Muhamad Dicky Ardiansah</h4>
                        <span>Chief Executive Officer</span>
                        <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                      <div class="member-img">
                        <img src="assetsIndex/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                          <a href=""><i class="fa-brands fa-facebook"></i></a>
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                          <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Muhamad Hafiz Daffa</h4>
                        <span>Product Manager</span>
                        <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                      <div class="member-img">
                        <img src="assetsIndex/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                          <a href=""><i class="fa-brands fa-facebook"></i></a>
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                          <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>Muhammad Faishal Khalfani</h4>
                        <span>CTO</span>
                        <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                      </div>
                    </div>
                  </div>

                </div>

              </div>

            </section><!-- End Team Section -->
            <div class="container">
              <div class="row">
                <header class="section-header">
                  <h2>Kontak</h2>
                  <p>Kontak Kami</p>
                </header>
                <div class="col-md-5 text-center d-flex align-items-center justify-content-center stretch-card grid-margin">
                  <img src="assets/img/Sent messages _Flatline.png" alt="" width="100%">
                </div>
                <div class="col-md-7 stretch-card grid-margin">
                  <div class="form-group">
                    <label for="inputName">Nama</label>
                    <input type="text" id="inputName" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputSubject">Subjek</label>
                    <input type="text" id="inputSubject" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputMessage">Pesan</label>
                    <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Kirim Pesan">
                  </div>
                </div>
              </div>
            </div>

          </main>



        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
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
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="asssts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> <!-- AdminLTE App -->
  <script src="assets/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/js/pages/dashboard.js"></script>
</body>

</html>