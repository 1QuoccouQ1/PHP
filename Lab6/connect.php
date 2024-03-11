<?php
    // thông tin cấu hình MySQL
    $servername = "127.0.0.1:3309";
    $usesname = "root";
    $password = "";
    $dbname = "cua_hang";

    // kết nối với MySQL

    $conn = new mysqli($servername, $usesname, $password, $dbname);

    //kiểm tra kêt nối 
    if ($conn->connect_error){
        die("kết nối đến MySQL thất bại:  ". $conn->connect_error);

    }else{
        echo "thanh công";
    }
