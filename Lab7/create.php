<?php 
    include 'connect.php';
    // kiểm tra xem form đã submit chưa
    if(isset($_POST['submit'])){
        // lấy tên sap từ form
        $name = $_POST['name'];
        $target_dir = "uploads/";
        // đường dẫn đến thư mục file
        $target_file = $target_dir.basename($_FILES["filetoUpload"]["name"]);
        //gán trạng thái upload file = 1 ( thành công)
        $uploadok = 1;
        // lấy định dạn ảnh
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // kiểm tra xem file đã đúng tồn tại chưa
        if(file_exists($target_file)){
            echo "File đã tồn tại";
            // bật trạng thái upload khi cài file lỗi
            $uploadok= 0;

        }
        // kiểm tra kích thước file
        if($_FILES["filetoUpload"]["size"] > 500000){
            echo "File ảnh quá lớn";
            $uploadok = 0;

        }
        // kiểm tra định dạng file 
        if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
            echo "Chỉ chấp nhận file JPG, JPEG, PNG, GIF";
            $uploadok = 0;
        }
        // kiểm tra nếu $uploadok = 0, tức là có lỗi xãy ra
        if($uploadok == 0){
            echo " Tập tin không được tải lên";
        } else {
            // di chuyển file từ thư mục tạm lên thư mụ đích
            if(move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file)){
                // lấy địa chỉ ảnh sau khi đã upload thành công
                $path = $target_dir.basename($_FILES["filetoUpload"]["name"]);
                //chèn vào bảng product trong cơ sowe dữ liệu test
                $query = "INSERT INTO product (namepro, image_url) VALUE ('$name','$path')";
                $result = mysqli_query($conn,$query);
                // kiểm tra kết quả try vấn
                if($result){
                    echo "Thêm sản phẩm thành công";
                } else{
                    echo "Có lỗi xảy ra". mysqli_error($connection);
                }
            } else {
                echo "có lỗi xãy ra khi tải lên file";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create file</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-bottom: 20px;
            display: block;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            height: 40px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100px;
            height: 40px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <a href="read.php">Danh sách</a>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <input type="file" name="filetoUpload" id="filetoUpload">
        <input type="submit" name="submit" value="Upload file" id="submit">
    </form>
</body>
</html>