<?php
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
global $conn;
$matkul = query("SELECT * FROM matakuliah ")




?>