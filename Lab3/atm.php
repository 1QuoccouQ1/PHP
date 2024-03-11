<!DOCTYPE html>
<html>
<head>
  <title>Chương trình rút tiền</title>
</head>
<body>
  <h1>Chương trình rút tiền</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST["cardNumber"];
    $hoTen = $_POST["hoten"];
    $withdrawAmount = 50000;

    echo "<div id='result'>";
    echo "Họ tên: " . $hoTen . "<br>";
    echo "Mã thẻ: " . $cardNumber . "<br>";
    echo "Số tiền rút: " . $withdrawAmount . "<br>";
    echo "</div>";
  }
  ?>
  <form method="POST">
      <label for="hoten">Họ tên:</label>
    <input type="text" id="hoten" name="hoten" required><br><br>
      <label for="cardNumber">Mã thẻ:</label>
    <input type="text" id="cardNumber" name="cardNumber" required><br><br>
    <input type="submit" value="Rút tiền">
  </form>
</body>
</html>
