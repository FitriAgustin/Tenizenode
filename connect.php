<?php
$server   = "localhost";
$user     = "root";
$password = "";
$database = "tenizencode";

$conn = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo json_encode([
        "status" => "error",
        "message" => "Gagal terhubung ke database"
    ]);
    exit();
}
?>
