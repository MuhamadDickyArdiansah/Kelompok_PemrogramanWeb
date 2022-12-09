<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_tutor = $_POST['nama_tutor'];
$profesi = $_POST['profesi'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

//menginput data ke database
mysqli_query($koneksi, "insert into tutor values('', '$nama_tutor',  '$profesi', '$email', '$password', '$gender')");

// mengalihkan halaman kembali ke index,php
header("location:../admin/tb_tutor.php");
