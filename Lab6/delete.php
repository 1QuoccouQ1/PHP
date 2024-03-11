<?php
    //kiểm tra xem có parameter Id được truyền vào hay không
    if(isset($_GET['id'])){  //vì truyền thông qua thẻ a (url) nên dùng get
        include 'connect.php';
        //lấy giá trị ID từ parameter
        $id = $_GET['id'];
        //thực thi truy vấn để xóa sản phẩm từ cơ sở dữ liệu
        $quenry ="DELETE FROM san_pham where id = '$id'";
        $result = mysqli_query($conn, $quenry);
        //kiểm tra kết quả truy vấn
        if ($result) {
            echo "Xóa sản phẩm Thành Công ";
            header("location:read.php");
        } else {
            echo "có lỗi sảy ra: " .mysqli_error($conn);
            print ("<a href='read.php'>danh sách sản phẩm</a>");

        } 
        //đóng kết nối với database
        mysqli_close($conn);
    } else {
        echo "Không tìm thấy sản phẩm để xóa.   ";
        print ("<a href='read.php'>Danh sách sản phẩm</a>");
    }
