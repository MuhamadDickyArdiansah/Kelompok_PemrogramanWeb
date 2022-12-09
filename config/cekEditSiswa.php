<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$status = $_POST['status'];

// update data ke database
mysqli_query($koneksi, "update siswa set nama='$nama', email='$email', password='$password', gender='$gender', status='$status' where id_siswa='$id_siswa'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/tb_siswa.php");
