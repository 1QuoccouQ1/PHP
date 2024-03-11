<?php
// kết nối tới cơ sở dữ liệu MySQL
include ('connect.php');
//kiểm tra xem form đã đc submit chưa
if(isset($_POST['submit'])){
    //lấy giá trị từ form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // thực thi truy vấn thêm sản phẩm mới vào cơ sở dữ liệu
    $query = "INSERT INTO san_pham (name, description, price) VALUES ('$name', '$description', '$price')";
    $result = mysqli_query($conn, $query);

    // Kiểm tra kết quả truy vấn
    if($result){
        echo "Thêm sản phẩm thành công.";

    }else{
        echo "Có lỗi xảy ra";
    }
    //đóng kết quả
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
<h2>Thêm sản phẩm</h2>

<a href="read.php">Danh sách sản phẩm</a>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "POST">
<label for="name">Tên Sản Phẩm</label>
<input type="text" name = "name" required><br>
<label for="description" >Mô Tả</label>
    <textarea name="description" required></textarea><br>
    <label for="price">Giá:</label>
    <input type="number" name = "price" required> <br>
    <input type="submit" value="Thêm sản phẩm" name= "submit">
</form>
</body>
</html>