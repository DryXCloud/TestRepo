<?php

class Produk
{

    public static $title = "ini class Produk";
    public static $nama;

    public function __construct($title)
    {
        self :: $title = $title;
    }

    public function display()
    {
        echo self :: $title;
    }
}


echo Produk :: display();


