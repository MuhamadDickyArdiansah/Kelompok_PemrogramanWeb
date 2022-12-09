<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from pembayaran where id_pembayaran='$id'");

header("location:../../admin/pembayaran.php");
