<!-- Bai1 -->
<?php
    $x1 = (2 == 3); echo $x1;
    $x2 = (2 != 3); echo $x2;
    $x3 = (2 <> 3); echo $x3;
    $x4 = (2 === 3); echo $x4;
    $x5 = (2 !== 3); echo $x5;
    $x6 = (2 > 3); echo $x6;
    $x7 = (2 < 3); echo $x7;
    $x8 = (2 >= 3); echo $x8;
    $x9 = (2 <= 3); echo $x9;
?>
<!-- Bai2 -->
<?php
    $s= "Hello\nWorld";
    echo $s;
    $s = 'It\'s\n'; 
    echo $s;
    echo "\nHello<br>World";
    echo "\u{00C2A9}"; 
    echo "\u{C2A9}";
?>

<?php
        $a = 'hello';
        $$a = 'world'; 
        echo "$a ${$a} <br>";
?>

<!-- bai3 -->
<?php
    $a=4;
    $b=5;
    $c=$a + $b;
    echo $c;
?>


<!-- Bai 4 -->
<?php 

    $s = 1000;
    $p = $s/60;
    $h = $s/3600;

    echo $p."Phut <br>";
    echo $h."Gio";

?>