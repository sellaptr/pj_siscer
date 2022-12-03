<?php

include 'koneksi.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];


    // menyiapkan query
    $sql = "INSERT INTO login (username, password, level) 
            VALUES ($username, $password, 'mahasiswa')";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":level" => $level
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) header("Location: login.php");
}
