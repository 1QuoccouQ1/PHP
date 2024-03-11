<?php
include('connect.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $madatphong = $_POST['madatphong'];
    $hotenkhach = $_POST['hotenkhach'];
    $giaphong = $_POST['giaphong'];
    $ngaydatphong = $_POST['ngaydatphong'];
    $soluongphong = $_POST['soluongphong'];
    
    $query = "UPDATE qlnh SET madatphong = '$madatphong' , hotenkhach = '$hotenkhach', giaphong = '$giaphong',ngaydatphong = '$ngaydatphong',soluongphong = '$soluongphong' WHERE id = '$id'";
    $result = mysqli_query($conn , $query);
    if( $result){
        echo "Update Complete !";
    }else {
        echo "Update Error !" . mysqli_ersror($conn);
    }
    mysqli_close($conn);
}else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM san_pham WHERE id = '$id'";
    $result = mysqli_query($conn , $query);
    if( $result){
       $row = mysqli_fetch_assoc($result);
       $madatphong = $row['madatphong'];
       $hotenkhach = $row['hotenkhach'];
       $giaphong = $row['giaphong'];
    }else {
        echo "Error !" . mysqli_error($conn);
    }
    mysqli_close($conn);
}else{
    echo "Don't find out the product to update !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <a href="read.php">Danh sách</a>
    <h2>Cap nhat san pham</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="hidden" name="id" value ="<?php echo $id;?>"><br>
    <label for="madatphong">Mã Đặt Phòng</label>
    <input type="text" name="madatphong" value ="<?php echo $madatphong;?>" required>
    <label for="hotenkhach">Ho va Tên Khách</label>
    <textarea name="hotenkhach" required><?php echo $hotenkhach; ?></textarea><br>
    <label for="giaphong">Giá Phòng</label>
    <input type="number" name="giaphong" value= "<?php echo $giaphong;?>" required><br>
    <label for="ngaydatphong">Ngày Đặt Phòng</label>
    <input type="number" name="ngaydatphong" value= "<?php echo $ngaydatphong;?>" required><br>
    <label for="soluongphong">Số Lượng Phòng</label>
    <input type="number" name="soluongphong" value= "<?php echo $soluongphong;?>" required><br>
    <input type="submit" name="submit" value="Cap nhat san pham"> 

</form>
</body>
</html>

