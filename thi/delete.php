<?php 
if(isset($_GET['id'])) {
    include 'connect.php';
    $id = $_GET['id'];
    $query= "DELETE FROM qlnh WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if($result) {  
        echo "xóa  thành công";
        header("location: read.php");
    }else{
        echo "Có lỗi xảy ra, vui lòng thử lại!" . mysqli_error($conn);
        print ("<a href='read.php'>Danh sách </a>");
    }
}else{
    echo "không tìm thấy  để xóa";
    print ("<a href='read.php'>Danh sách </a>");
}
// đóng kết nối
mysqli_close($conn);

?>

