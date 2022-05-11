<?php
$a = (int)readline('Angka 1 = ');
$b = (int)readline('Angka 2 = ');

for ($i=$a; $i <= $b; $i++) { 
    if ($i%2 == 1) {
        echo $i . " adalah ganjil";
        echo "\r\n";
    }else if($i%2 == 0) {
        echo $i . " adalah genap";
        echo "\r\n";
    }print("");
}
?>