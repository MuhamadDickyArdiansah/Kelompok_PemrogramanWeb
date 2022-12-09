<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>

<body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h4>
            <i class="fas fa-globe"></i> Kelompok Web, Inc.
            <small class="float-right">Date: 2/10/2014</small>
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
          <b>Tanggal jatuh tempo:</b> 2/22/2014<br>
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
              </tr>
            </thead>
            <tbody>
              <?php
              include '../config/koneksi.php';
              error_reporting(E_ALL ^ E_WARNING || E_NOTICE);

              $no = 1;
              $data = mysqli_query($koneksi, "select  * from pembayaran");
              while ($d = mysqli_fetch_array($data)) {
                $jumlah += $d['harga'];
                $pajak = $total * 0.062;
                $total = $jumlah + $pajak;
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nama_course']; ?></td>
                  <td>Rp. <?php echo $d['harga']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
          <p class="lead">Metode Pembayaran:</p>
          <img src="../assets/img/credit/gopay.png" alt="gopay">
          <img src="../assets/img/credit/qris.png" alt="qris" style="width: 60px;">
          <img src="../assets//img/credit/mastercard.png" alt="Mastercard">
          <img src="../assets/img/credit/paypal2.png" alt="Paypal">
          <img src="../assets/img/credit/bni.png" alt="Paypal">
          <img src="../assets/img/credit/bri.png" alt="Paypal" style="width: 51px;">
          <img src="../assets/img/credit/bca.png" alt="Paypal" style="width: 51px;">

          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
            jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Jumlah Harga </th>
                <td>
                  Rp. <?php echo number_format($jumlah) ?>
                </td>
              </tr>

              <tr>
                <th>Pajak (6.2%)</th>
                <td>Rp. <?php echo number_format($pajak) ?></td>

              </tr>
              <tr>
                <th>Metode pembayaran:</th>
                <td>
                  <select class="form-select" aria-label="Default select example" style="border: none;">
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
                <td>Rp. <?php echo number_format($total) ?></td>

              </tr>

            </table>

          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  <!-- Page specific script -->
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>

</html>