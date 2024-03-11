<?php
include('connect.php');
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $query = "UPDATE san_pham SET name = '$name' , description = '$description', price = '$price' WHERE id = '$id'";
    $result = mysqli_query($conn , $query);
    if( $result){
        echo "Update Complete !";
    }else {
        echo "Update Error !" . mysqli_ersror($conn);
    }
    mysqli_close($conn);
}else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM san_pham WHERE id = '$id'";
    $result = mysqli_query($conn , $query);
    if( $result){
       $row = mysqli_fetch_assoc($result);
       $name = $row['name'];
       $description = $row['description'];
       $price = $row['price'];
    }else {
        echo "Error !" . mysqli_error($conn);
    }
    mysqli_close($conn);
}else{
    echo "Don't find out the product to update !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <a href="read.php">Danh sách</a>
    <h2>Cap nhat</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="hidden" name="id" value ="<?php echo $id;?>"><br>
    <label for="name">Ten</label>
    <input type="text" name="name" value ="<?php echo $name;?>" required>
    <label for="description">Mo ta</label>
    <textarea name="description" required><?php echo $description; ?></textarea><br>
    <label for="price">gia</label>
    <input type="number" name="price" value= "<?php echo $price;?>" required><br>
    <input type="submit" name="submit" value="Cap nhat san pham"> 

</form>
</body>
</html>

