<?php

function hitungVokal($kata){

    $arr = str_split($kata);
    $vocal = ['a', 'i', 'u', 'e', 'o'];

    $found = array_intersect($vocal, $arr);
    $jumlah = count($found);

    echo $kata." = ".$jumlah." yaitu ";
    foreach($found as $isi){
        echo $isi." ";
    }
}

echo hitungVokal(fgets(fopen('php://stdin', 'r')));
?>