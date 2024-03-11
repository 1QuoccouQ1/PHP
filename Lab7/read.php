<?php
    include 'connect.php';
    // truy vấn danh sách các sản phẩm
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sản phẩm</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align:center;

        }

        a {
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 100px;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <a href="create.php">Thêm sản phẩm mới</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
           
        </tr>
        <?php
        // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$row['id'] ."</td>";
            echo "<td>" .$row['namepro'] ."</td>";
            echo "<td><img src=".$row['image_url']."></td>";
            echo "<td>";
            echo " <a href='update.php?id=" . $row['id'] ."'>Sửa</a> ";
            echo "</td>";
            echo "<td>";
            echo " <a href='delete.php?id=" . $row['id'] ."'>Xóa</a> ";
            echo "</td>";
            echo "</tr>";
        }
        ?>
       
    </table>
</body>
</html>

<?php
//đóng kết nóii
mysqli_close($conn);
?>