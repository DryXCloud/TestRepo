<?php

include 'ApaKabar.php';

class Pesan
{
    use ApaKabar , SelamatPagi;
        
    // public function displayClass()
    // {
    //     echo static::class . ' dari function displayClass';
    // }
}

// Inisialisasi class objek
$pesan = new Pesan();
echo $pesan->apaKabar();
// echo $pesan->displayClass();