<?php
$kq ="";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $ch = $_POST["chuoi"];
        $str = chunk_split($ch,2,":");
        $kq = substr($str , 0 , strlen($str)-1);

    }

    function xyly($chuoi) {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = <?php echo $_SERVER["PHP_SELF"];?> method="POST">
        Nhập dãy số :
        <input type="text" id="chuoi" name="chuoi">
        <span>Kết quả là : <?php  echo $kq; ?> </span>
        <br>
        <input type="submit" value="Xử lý">
    </form>
</body>
</html>
