<?php
$kq = 0;
$arr = [];
$ok = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so1 = $_POST["so1"];
    $so2 = $_POST["so2"];
    $pt = $_POST["pheptinh"];

    if ($so1 == "") {
        $arr["loi1"] = "Số 1 chưa được nhập";
        $ok = false;
        
    } else {
        if (!is_numeric($so1)) {
            $arr["loi1"] = "Số 1 phải là số";
            $ok = false;
        } else {
            $arr["loi1"] = null;
            $ok = true;

        }
    }
    if ($so2 == "") {
        $arr["loi2"] = "Số 2 chưa được nhập";
        $ok = false;
        
    } else {
        if (!is_numeric($so1)) {
            $arr["loi2"] = "Số 2 phải là số";
            $ok = false;
        } else {
            $arr["loi2"] = null;
            $ok = true;

        }
    }

    


   

    if ($ok == true) {
        if ($pt === "+") {
            $kq = cong($so1, $so2);
        } else if ($pt === "-") {
            $kq = tru($so1, $so2);
        } else if ($pt === "*") {
            $kq = nhan($so1, $so2);
        } else if ($pt === "/") {
            if ($so2 == 0) {
                $arr["loi2"] = "Không thể chia cho 0";
                $ok = false;
            } else {
                $kq = chia($so1, $so2);
            }
        } else {
            $arr["loi2"] = "Phép tính không hợp lệ";
            $ok = false;
        }
    }
}

function cong($a, $b) {
    return $a + $b;
}

function tru($a, $b) {
    return $a - $b;
}

function nhan($a, $b) {
    return $a * $b;
}

function chia($a, $b) {
    return $a / $b;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <h3>Số 1</h3>
        <input type="number" name="so1" id="so1">
        <span><?php isset($arr["loi1"]) ? print($arr["loi1"]) :""; ?></span>

        <h3>Số 2</h3>
        <input type="number" name="so2" id="so2">
        <span><?php isset($arr["loi2"]) ? print($arr["loi2"]) :""; ?></span>

        <h3>Phép tính</h3>
        <input type="text" name="pheptinh" id="pheptinh">

        <h3>Kết quả</h3>
        <span><?php echo $kq; ?></span>

        <input type="submit" value="Tính toán">
    </form>
</body>

</html>
