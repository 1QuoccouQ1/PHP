<?php 
    $array=["CCTV","Computer","Hard Disk","Keyboad","Laptops","Memory","Mouse"];
    $i = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <script src="https://kit.fontawesome.com/db4ae7b83e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="category.css">
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <thead>
            <tr cellpadding="2px" align="center">
                <td colspan="2">Name</td>
                <td>STT</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($array as $new){ ?>
                <tr cellpadding="2px">
                    <td colspan="2"> <?php echo $new ?> </td>
                    <td> <?php echo $i; ?></td>
                    <td > <a href=""> <i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td > <a href=""> <i class="fa-solid fa-trash"></i></a></td>
                </tr>

            <?php  $i++; } ?>
        </tbody>
    </table>
</body>
</html>