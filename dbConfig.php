<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "hahalolo_tour";

// B1 : KẾT NỐI TỚI DATABASE SERVER
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection/ KIỂM TRA CÓ LỖI HAY KHÔNG
if ($db->connect_error) { // CÚ PHÁP -> DÙNG ĐỂ TRUY CẬP VÀO THUỘC TÍNH/ PHƯƠNG THỨC CỦA 1 ĐỐI TƯỢNG TRONG PHP
    die("Connection failed: " . $db->connect_error);
}
?>

