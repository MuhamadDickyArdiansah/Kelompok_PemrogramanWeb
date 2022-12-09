<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_course = $_POST['nama_course'];
$nama_tutor = $_POST['nama_tutor'];

//menginput data ke database
mysqli_query($koneksi, "insert into course values('', '$nama_course','', '$nama_tutor')");

// mengalihkan halaman kembali ke index,php
header("location:../admin/tb_course.php");
