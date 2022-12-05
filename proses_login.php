<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$password =$_POST['password'];
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$password'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database

if($cek > 0){
	$data = mysqli_fetch_array($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="dosen"){
		// berfungsi membuat session
		$_SESSION['username'] =  $data['username'];
		$_SESSION['level'] = "dosen";
		//berfungsi mengalihkan ke halaman admin
		header("Location:dosen.php");
	// berfungsi mengecek jika user login sebagai moderator

	}else if($data['level']=="mahasiswa"){
		// berfungsi membuat session
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = "mahasiswa";
		// berfungsi mengalihkan ke halaman moderator
		header("Location:mahasiswa.php");
    }
}
?>