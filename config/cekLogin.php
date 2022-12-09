<?php
session_start();
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$password = $_POST['password'];

// menyeleksi data pada tabel admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama='$nama' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
  $_SESSION['nama'] = $nama;
  $_SESSION['status'] = "login";
  $_SESSION['login'] = true;
  header("location:../admin/index.php");
} else {
  echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
  echo "<script> window.location ='../login.php';</script>";
}
