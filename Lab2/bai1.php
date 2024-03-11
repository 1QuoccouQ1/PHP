<!-- Bai1 -->
<?php 
    $color = array("red", "green", "blue");
    print_r($color);
    echo "<br>";
    echo $color[0];

    $age = array();
    $age[0] = 10;
    $age[1] = 20;
    $age[3] = 30;
    print_r($age);

?>

<!-- Bai2 -->
<?php

    $salaries = array(
            "mohammad" => 2000,
            "qadir" => 1000,
            "zara" => 500
    );

    echo "Salary of mohammad is ".$salaries["mohammad"]."<br/>";
    echo "Salary of qadir is ".$salaries["qadir"]."<br/>";
    echo "Salary of zara is ".$salaries["zara"]."<br/>";


?>

<!-- Bai3 -->
<?php

    define("LOCATOR", "/locator");
    define("CLASSES", LOCATOR."/code/classes");
    define("FUNCTIONS", LOCATOR."/code/functions");
    define("USERDIR", LOCATOR."/user");
?>
