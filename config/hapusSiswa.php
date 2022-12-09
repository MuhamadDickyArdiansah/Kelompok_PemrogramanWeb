<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from siswa where id_siswa='$id'");

header("location:../admin/tb_siswa.php");
