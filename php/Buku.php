<?php
include 'Produk.php';

class Buku extends Produk {
    abstract public function sayHello($name):void;
{
    echo "Hellow, saya adalah {$name} ";
}

}

$obj = new Buku();

echo $obj->sayHello(name : );          



?>