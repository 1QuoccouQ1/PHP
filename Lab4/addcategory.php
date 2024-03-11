<?php
$category = array('CCTV','Computer','Hard Disk','Laptop');
foreach ($category as $ct){
    // print ($ct);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/category.css">
    <style>
        .xanh{
            background-color: green;
        }
        .vang{
            background-color: yellow;
        }
    </style>
</head>

<body>
        <table border="1">
            <tr>

                <td>STT</td>
                <td>Tên Category</td>
                <td>Action</td>
            </tr>
            <tr>
            <?php 
            $i = 0;
                foreach($category as $ct){
                    $i++;
                ?>
                <?php 
               if($i %2 == 0) { ?>
                <tr class="xanh">
               <?php } else { ?>
                <tr class="vang">
                    <?php } ?>
               
           
                <td><?php print($i);?></td>
                <td><?php print($ct);?></td>
                <td><img onclick="info('<?php print($ct);?>')" src="img/edit.png" width="15px" height="15px" alt="">edit</td>
                <td><img src="img/remove.png" width="15px" height="15px" alt="">remove</td>
            </tr>
            <?php }?>
        </table>
            <script>
                function info(sp){
                alert(sp)
            }
            </script>
</body>

</html>