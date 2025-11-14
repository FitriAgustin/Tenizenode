<?php
require_once 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //mengambil nilai value dari tabel siswa
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //cek apakah emailnya ada atau tidak
    $check = mysqli_query($conn, "SELECT *FROM user WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "email sudah terdaftar";
    } else {
        $sql = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')";
        if (mysqli_query($conn, $sql)) {
            echo "User berhasil didaftarkan";
        } else {
            echo "User gagal didaftarkan";
        }
    }
} else {
    echo "Invalid request";
}
?>