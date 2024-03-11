<?php
include('connect.php');

$message = '';

if (isset($_POST['submit'])) {
    $madatphong = $_POST['madatphong'];
    $hotenkhach = $_POST['hotenkhach'];
    $giaphong = $_POST['giaphong'];
    $ngaydatphong = $_POST['ngaydatphong'];
    $soluongphong = $_POST['soluongphong'];

    $query = "INSERT INTO qlnh (madatphong, hotenkhach, giaphong, ngaydatphong, soluongphong) VALUES ('$madatphong', '$hotenkhach', '$giaphong', '$ngaydatphong', '$soluongphong')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $message = "Thêm thành công";
    } else {
        $message = "Có lỗi xảy ra: ";
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thông Tin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            color: #f44336;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Thông tin</h2>
        <a href="read.php">Danh sach</a>
        <label for="madatphong">Mã Đặt Phòng</label>
        <input type="text" name="madatphong" id="madatphong" placeholder="Nhập Mã Đặt Phòng">
        <label for="hotenkhach">Họ Tên Khách</label>
        <input type="text" name="hotenkhach" id="hotenkhach" placeholder="Nhập Họ Tên Khách">
        <label for="giaphong">Giá Phòng</label>
        <input type="number" name="giaphong" id="giaphong" placeholder="Nhập Giá Phòng">
        <label for="ngaydatphong">Ngày Đặt Phòng</label>
        <input type="number" name="ngaydatphong" id="ngaydatphong" placeholder="Nhập Ngày Đặt Phòng">
        <label for="soluongphong">Số Lượng Phòng</label>
        <input type="text" name="soluongphong" id="soluongphong" placeholder="Nhập Số Lượng Phòng">
        <div class="btn">
            <input type="submit" value="Thêm " name="submit">
        </div>
    </form>
    <p class="message"><?php echo $message; ?></p>
</body>
</html>
