<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from tugas where id_tugas='$id'");

header("location:../admin/tb_tugasAkhir.php");
