<?php

function kalkulator($kal){
 
    $operator = array();
    
    for($i=0; $i<=strlen($kal)-1; $i++)
    {
        if (($kal[$i] == "+") || ($kal[$i] == "-") || ($kal[$i] == "*") || ($kal[$i] == "/"))
        {
            $operator[] = $kal[$i];
        }
    }
    
    $kal = str_replace("+"," ",$kal);
    $kal = str_replace("-"," ",$kal);
    $kal = str_replace("*"," ",$kal);
    $kal = str_replace("/"," ",$kal);

    $operand = explode(" ",$kal);

    $hasil = $operand[0];

    for($i=0; $i<=count($operator)-1; $i++)
    {
        if ($operator[$i] == "+") {
            $hasil = $hasil + $operand[$i+1];}
        else if ($operator[$i] == "-") {
            $hasil = $hasil - $operand[$i+1];}
        else if ($operator[$i] == "*") {
            $hasil = $hasil * $operand[$i+1];}
        else if ($operator[$i] == "/") {
            $hasil = $hasil / $operand[$i+1];}
    }

    echo "output : ".$hasil;
};

echo kalkulator(fgets(fopen('php://stdin', 'r')));
