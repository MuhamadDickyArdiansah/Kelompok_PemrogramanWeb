<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from jadwal where id_jadwal='$id'");

header("location:../admin/tb_jadwal.php");
