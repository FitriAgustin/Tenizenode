<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "tenizencode";

$debug = true;
$conn = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    if ($debug) {
        echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    }
    exit();
} else {
    if ($debug) {
        echo "Berhasil terhubung ke database '$database'";
    }
}
?>