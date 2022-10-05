<?php


$number = 10 ;
$nilai = 12;

function cobaOperator($number , $nilai)
    {
if ($number == $nilai) {

    echo $number . "+" . $nilai . "=" . ($number +$nilai);
    
   }elseif($number >= $nilai) {

    echo $number . "-" . $nilai . "=" . ($number -$nilai);
    
   }elseif($number <= $nilai) {

        echo $number . "x" . $nilai . "=" . ($number *$nilai);

}else{
    echo "[{$number}] Tidak sama Tipe Data [{$number}]";
}
}

    
        cobaOperator(number :10  , nilai :5 );





