<?php

$servername = 'localhost';
$username = 'root';
$password = ''; 
$dbname = 'cua_hang';

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Kết nối đến database thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công";
}

?>
