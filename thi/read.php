<?php
include('connect.php');

$query = "SELECT * FROM qlnh";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Món Ăn</title>
    <style>
        /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Apply a background color and center content */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    width: 80%;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 10px;
    text-align:center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

.add-button, .action-button {
    display: inline-block;
    padding: 8px 15px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    margin-right: 10px;
}

.action-button {
    background-color: #e74c3c;
}



    </style>
</head>

<body>
    <h2>Danh sách</h2>
    <a href="create.php">Thêm Thông Tin</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Mã Đặt Phòng</th>
            <th>Họ Tên Khách</th>
            <th>Giá Phòng</th>
            <th>Ngày Đặt Phòng</th>
            <th>Số Lượng Phòng</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['madatphong'] . "</td>";
            echo "<td>" . $row['hotenkhach'] . "</td>";
            echo "<td>" . $row['giaphong'] . "</td>";
            echo "<td>" . $row['ngaydatphong'] . "</td>";
            echo "<td>" . $row['soluongphong'] . "</td>";
            echo "<td><a href='update.php?id=" . $row['id'] . "'>Sửa</a></td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Xóa</a></td>";
            echo "</tr>";
            

        }
        ?>
    </table>
</body>

</html>
