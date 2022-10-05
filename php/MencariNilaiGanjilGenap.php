<?php

class MencariNilaiGanjilGenap
{

    public function cariNilaiGanjilGenap($inputNilai){
    //masukkan logicnya disini
    if ($inputNilai %= 2) {

         echo "{$inputNilai} adalah ganjil";
    
    } else {

        echo "{$inputNilai} adalah Genap";

        }
    }
}
//inisialisasi class objek
$obj = new MencariNilaiGanjilGenap();

echo $obj->cariNilaiGanjilGenap(inputNilai : 11);

?>