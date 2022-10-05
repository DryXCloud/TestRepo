<?php
include 'Display.php';

class HandPhone implements Display{

  public $pesan = "Selamat Siang";

    public function tampilkan()
    {

        echo $this->pesan;

    }

    public function turnoffScreen()
    
    {

        echo 'Layar Mati';

    }
}
$handphone = new HandPhone();


echo $handphone->tampilkan();

