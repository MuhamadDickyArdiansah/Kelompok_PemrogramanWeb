<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_tugas = $_POST['id_tugas'];
$id_course = $_POST['id_course'];
$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$nama_course = $_POST['nama_course'];
$nama_tugas = $_POST['nama_tugas'];
$nilai = $_POST['nilai'];
$status = $_POST['status'];

// update data ke database
mysqli_query($koneksi, "update tugas set nama_siswa='$nama_siswa', nama_course='$nama_course', nama_tugas='$nama_tugas', nilai='$nilai', status='$status' where id_tugas='$id_tugas'");

// mengalihkan halaman kembali ke index.php
header("location:../admin/tb_tugasAkhir.php");
