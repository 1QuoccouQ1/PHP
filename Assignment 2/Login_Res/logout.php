<?php 
    echo "Đăng xuất thành công";
    session_start();
    session_destroy();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng xuất</title>
</head>
<body>
    Quay lại đăng nhập
    <a href="login.php">Log in</a>
</body>
</html>