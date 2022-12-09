<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nama_course = $_POST['nama_course'];

//menginput data ke database
mysqli_query($koneksi, "insert into jadwal values('', '$hari', '$jam', '', '$nama_course')");

// mengalihkan halaman kembali ke index,php
header("location:../admin/tb_jadwal.php");
