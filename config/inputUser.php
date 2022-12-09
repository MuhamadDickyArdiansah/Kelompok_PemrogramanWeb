<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$status = $_POST['status'];

//menginput data ke database
mysqli_query($koneksi, "insert into siswa values('', '$nama', '$email', '$password', '$gender', '$status')");

// mengalihkan halaman kembali ke index,php
header("location:../admin/tb_siswa.php");
