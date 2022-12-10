<?php
include "koneksi.php";

if ( isset($_POST["daftar"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];
    $query = "INSERT INTO user
    VALUES 
    ('','$username','$password','$level')
    ";
mysqli_query($conn,$query);
 header("location:login.php");
}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="scss/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form method="POST" action="">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your UserName" name = "username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter your Password" name= "password" required>
                    </div>

                </div>
                <div class="gender-details" name="level">
                    <input type="radio" value="mahasiswa">
                    <input type="radio" value="dosen">
                    <span class="gender-title">Sebagai</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Mahasiswa</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Dosen</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="daftar" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>