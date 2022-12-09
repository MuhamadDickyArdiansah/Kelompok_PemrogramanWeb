<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_jadwal = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nama_course = $_POST['nama_course'];

// update data ke database
mysqli_query($koneksi, "update jadwal set hari='$hari', jam='$jam', nama_course='$nama_course' where id_jadwal='$id_jadwal'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/tb_jadwal.php");
