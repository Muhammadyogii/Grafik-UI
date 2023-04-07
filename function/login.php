<?php

include '../config/connection.php';

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE BINARY username = '$username' AND BINARY password = '$password'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $row = mysqli_fetch_array($query);
    $_SESSION['username'] = $row['username'];
    $_SESSION['userid'] = $row['id_pengguna'];
    $_SESSION['nama'] = $row['nama_pengguna'];
    $_SESSION['level'] = $row['level'];
    echo json_encode(['message' => 'LOGIN BERHASIL', 'status' => '1', 'nama' => $row['nama_pengguna']]);
} else {
    echo json_encode(['message' => 'LOGIN GAGAL', 'status' => '0']);
}
