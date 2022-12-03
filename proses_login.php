<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password = '$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0){
    $data = mysqli_fetch_assoc($result);

    if($data['level']=="dosen"){
        $_SESSION['username']=$username;
        $_SESSION['password']="$password";
        $_SESSION['level']="level";

        header("location:dosen.php");

    }else if ($data['level']=="mahasiswa"){
        $_SESSION['username']=$username;
        $_SESSION['password']="$password";
        $_SESSION['level']="level";

        header("location:mahasiswa.php");

    }else{
       header("location:login.php");
    }
}
