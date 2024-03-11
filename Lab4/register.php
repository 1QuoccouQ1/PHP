<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $arr_err = [];
    $user = $_POST["user"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $ok = true;

    // Kiểm tra các điều kiện hợp lệ cho trường dữ liệu đăng ký
    if (empty($user)) {
        $arr_err["err_user"] = "User không được để trống";
        $ok = false;
    }
    if (empty($email)) {
        $arr_err["err_email"] = "Email không được để trống";
        $ok = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $arr_err["err_email"] = "Email không hợp lệ";
        $ok = false;
    }
    if (empty($password)) {
        $arr_err["err_password"] = "Password không được để trống";
        $ok = false;
    }
    if (empty($confirm_password)) {
        $arr_err["err_confirm_password"] = "Vui lòng xác nhận mật khẩu";
        $ok = false;
    } elseif ($password !== $confirm_password) {
        $arr_err["err_confirm_password"] = "Mật khẩu xác nhận không khớp";
        $ok = false;
    }
    if ($ok) {
        // code xử lý đăng ký ở đây...
        $_SESSION["user"] = $user;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        header("Location: success_dk.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="form-content">
            <h4>REGISTER</h4>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <label for="user">User Name</label> <br>
                <input type="text" name="user" id="user" placeholder="Enter user"> <br>
                <div><?php isset($arr_err["err_user"]) ? print($arr_err["err_user"]) : ""; ?></div>
                <label for="email">Email</label> <br>
                <input type="email" name="email" id="email" placeholder="Enter email"> <br>
                <div><?php isset($arr_err["err_email"]) ? print($arr_err["err_email"]) : ""; ?></div>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password"><br>
                <div><?php isset($arr_err["err_password"]) ? print($arr_err["err_password"]) : ""; ?></div>
                <label for="confirm_password">Confirm Password</label> <br>
                <input type="password" name="confirm_password" id="confirm_password"><br>
                <div><?php isset($arr_err["err_confirm_password"]) ? print($arr_err["err_confirm_password"]) : ""; ?></div>
                <input type="submit" name="register" id="register" value="Register">
            </form>
            <span></span>
            Click here to <a href="login.php">login</a>
        </div>
    </div>
</body>

</html>
