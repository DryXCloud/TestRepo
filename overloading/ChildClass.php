<?php

include 'ParentClass.php';

class Buku extends Produk
{
   
    public static $price;
    public static $title;

    public function __construct($title = "Ini Child Class", $price = 75000)
    {
        self :: $price = $price;
    }

        public function displayChild()
        {
            echo self :: $title;
            echo self :: $price;
        }
}

$buku = new Buku("Pemograman Website", 75000);

echo Buku :: displayChild();






