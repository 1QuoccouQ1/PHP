<?php

    include('connect.php');
    session_start();
    $message ="";

    // Kiểm tra nút Đăng nhập đã được nhấn hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Lấy thông tin người dùng từ form đăng nhập
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $password;

        // Xây dựng truy vấn SQL
        $query = "SELECT * FROM user WHERE username='$username' ";

        // Thực thi truy vấn
        $result = mysqli_query($conn, $query);

        // Kiểm tra kết quả trả về
        if(mysqli_num_rows($result) > 0){

            // Lấy thông tin người dùng từ cơ sở dữ liệu
            $row = mysqli_fetch_assoc($result);
            // Kiểm tra mật khẩu hợp lệ
            if($row['password']===$password){
            // Đăng nhập thành công và set user name vào biến session
            $_SESSION["user"] = "$username";
            header("Location: product.php");
            } else {
                // sai mk
                echo "Sai mật khẩu. Vui lòng thử lại";
            }
        } else {
             // Người dùng không tồn tại
            echo "Người dùng không tồn tại!";
        }
    }
   
    
        // Đóng kết nối

    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <div>
        <h1>LOG IN</h1>
        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <span class="input-span">
                <label for="username" class="label">Username</label>
                <input type="text" name="username" id="username"></span>
            <span class="input-span">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="password"></span>
            <span class="span"><a href="forgotpass.php">Forgot password?</a></span>
            <input class="submit" type="submit" value="Log in">
            <span class="span">Don't have an account? <a href="register.php">Register</a></span>
        </form>
    </div>

</body>

</html>