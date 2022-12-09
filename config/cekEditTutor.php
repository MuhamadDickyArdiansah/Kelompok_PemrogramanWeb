<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_tutor = $_POST['id_tutor'];
$nama_tutor = $_POST['nama_tutor'];
$profesi = $_POST['profesi'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

// update data ke database
mysqli_query($koneksi, "update tutor set nama_tutor='$nama_tutor', profesi='$profesi', email='$email', password='$password', gender='$gender' where id_tutor='$id_tutor'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/tb_tutor.php");
