<?php
    // khởi tạo biên session

    session_start();
    // kiểm tra xem sessionuser có tồn tại không ?
    if (isset($_SESSION["user"])) {
        ?>
    Welcome <?php echo $_SESSION["user"]; ?>.
    Nháy chuột vào đây để thoát <a href="logout.php" tite="Logout">Logout.</a>

<?php
} else echo "<a href='login.php' tite='Login'>Vui lòng đăng nhập</a>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
    <div class="container">
</body>
<h1>Đây là trang product hoặc category của  bạn

</html>