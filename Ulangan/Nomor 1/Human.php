<?php

class Human
{

public $title;
}

$nama = new Human();
$age = new Human();
$major = new Human();
$is_active = new Human();

echo "Nama    : " . $nama->title = "Kevin    Edward Wuysang" . "<br>";
echo "Umur    : " . $age->title = "16 Tahun" . "<br>";
echo "Major   : " . $major->title = "Rekayasa Perangkat Lunak" . "<br>";
echo "Active  : " . $is_active->title = "True" ."<hr>";

echo "Nama    : " . $nama->title = "Suryadi" . "<br>";
echo "Umur    : " . $age->title = "20 Tahun" . "<br>";
echo "Major   : " . $major->title = "Rekayasa Perangkat Lunak" . "<br>";
echo "Active  : " . $is_active->title = "True";


//output :
// Nama : Kevin Edward Wuysang
// Umur : 16 Tahun
// Major : Rekayasa Perangkat Lunak
// Active : True
// ___________________________________________________________________________________
//
// Nama : Suryadi
// Umur : 20 Tahun
// Major : Rekayasa Perangkat Lunak
// Active : True
?>