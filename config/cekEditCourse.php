<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_course = $_POST['id_course'];
$id_tutor = $_POST['id_tutor'];
$nama_course = $_POST['nama_course'];
$nama_tutor = $_POST['nama_tutor'];

// update data ke database
mysqli_query($koneksi, "update course set nama_course='$nama_course', nama_tutor='$nama_tutor' where id_course='$id_course'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/tb_course.php");
