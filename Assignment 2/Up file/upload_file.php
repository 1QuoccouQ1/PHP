<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Upload File</h2>
    <?php
    //kiểm tra xem form đã được submit hay chưa
    if (isset($_POST['submit'])) {
        $target_dir = "uploads/"; //folder to upload file in server
        //đường dẫn đến thư mục lưu trữ file
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        //gắn trạng thái upload file = 1 (thành công)
        $uploadOk = 1;
        //lấy định dạng ảnh
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // kiểm tra xem file đã tồn tại hay chưa
        if (file_exists($target_file)) {
            echo "File đã tồn tại.";
            // bật trạng thái upload khi file lỗi
            $uploadOk = 0;
        }
        //kiểm tra kích thước file
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }           
        //kiểm tra định dạng file
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "chỉ chấp nhận file JPG, JPEG, PNG và GIF";
            $uploadOk = 0;
        }
        echo 
        //kiểm tra nếu $uploadOk = 0, tức là có lỗi xảy ra
        if ($uploadOk == 0) {
            echo "Tập tin không được tải lên";
        } else {
            //di chuyển file từ thư mục tạm lên thư mục đích
            if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                echo "File" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "đã được tải lên thành công";
            } else {
                echo "có lỗi xảy ra khi tải lên file";
            }
        }
    }

    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"> <br>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>

</html>