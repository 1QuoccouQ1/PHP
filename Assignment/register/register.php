<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $arr_err = [];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];
  $ok = true;
  if (empty($username)) {
    $arr_err["err_username"] = "User không được để trống";
    $ok = false;
  }
  if (empty($email)) {
    $arr_err["err_email"] = "email không được để trống";
    $ok = false;
  }
  if (empty($password)) {
    $arr_err["err_password"] = "Password không được để trống";
    $ok = false;
  }
  if (empty($confirm)) {
    $arr_err["err_confirm"] = "confirm password không được để trống";
    $ok = false;
  }
  if($ok) {
  $_SESSION["user"] = $user;
  $_SESSION["email"] = $email;
  $_SESSION["password"] = $password;
  $_SESSION["confirm"] = $confirm;
  header("Location: /ASSIGNMENT/dangnhap/login.php");

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="register.css">
</head>

<body>
  <div class="container">
    <div class="imgbx">
      <img src="/ASSIGNMENT/dangky/css/img/1.jpg" alt="">
    </div>
    <div class="card">
      <div class="card-header">
        <div class="text-header">Sign Up</div>
      </div>
      <div class="card-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
          <div class="form-group">
            <label for="username">Username:</label>
            <input  class="form-control" name="username" id="username" type="text">
            <span><?php isset($arr_err["err_username"]) ? print($arr_err["err_username"]) : ""; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input  class="form-control" name="email" id="email" type="email">
            <span> <?php isset($arr_err["err_email"]) ? print($arr_err["err_email"]) : ""; ?> </span>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input  class="form-control" name="password" id="password" type="password">
            <span> <?php isset($arr_err["err_password"]) ? print($arr_err["err_password"]) : ""; ?> </span>
          </div>
          <div class="form-group">
            <label for="confirm">Confirm Password:</label>
            <input  class="form-control" name="confirm" id="confirm" type="password">
            <span> <?php isset($arr_err["err_confirm"]) ? print($arr_err["err_confirm"]) : "";  ?> </span>
          </div>
          <div><input type="checkbox" class="box">I agree all statements in Terms of service</div>
          <input type="submit" class="btn" value="submit">
        </form>
      </div>
    </div>
  </div>
</body>

</html>