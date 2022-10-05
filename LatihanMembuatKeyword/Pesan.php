<?php

    trait ApaKabar {
        public function apakabar(){
            echo static::class.'Apa Kabar';
        }
    }
trait SelamatPagi{
    public function apakabar(){
        echo static::class .'Selamat Pagi';
    }
}

class Pesan {
    use apakabar, SelamatPagi{
        ApaKabar::apaKabar insteadOf SelamatPagi;
        SelamatPagi::apakabar as apakabarDariTraitSelamatPagi;
    }
}


    //inisialisasi
$pesan = new Pesan();
echo $pesan->apakabarDariTraitSelamatPagi();


//OutPut:
//PesanSelamat Pagi
