
<?php

session_start();

$user = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $arr_err = [];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $ok = true;

    if (empty($user)) {
        $arr_err["err_user"] = "User không được để trống";
        $ok = false;
    }
    if (empty($password)) {
        $arr_err["err_password"] = "Password không được để trống";
        $ok = false;
    }
    if ($ok) {
        // code xử lý login ở đây...
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $password;
        // header("Location: sucess.php");

        echo $user;

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="form-content">
            <h4>LOGIN</h4>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <span> <?php echo $user; ?></span>
                <label for="user">User Name</label> <br>
                <input type="text" name="user" id="user" placeholder="Enter user"> <br>
                <div><?php isset($arr_err["err_user"]) ? print($arr_err["err_user"]) : ""; ?></div>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password"><br>
                <div><?php isset($arr_err["err_password"]) ? print($arr_err["err_password"]) : ""; ?></div>
                <input type="submit" name="login" id="login" value="Login">
            </form>
            <span></span>
            Click here to <a href="register.php"> register</a>
        </div>
    </div>
</body>

</html>