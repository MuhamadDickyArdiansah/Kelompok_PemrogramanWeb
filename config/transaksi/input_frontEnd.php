<?php

// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama_course = $_POST['nama_course'];
$harga = $_POST['harga'];


//menginput data ke database
mysqli_query($koneksi, "insert into pembayaran values('','', '$nama_course', '$harga')");

// mengalihkan halaman kembali ke index,php
header("location:../../admin/pembayaran.php");
