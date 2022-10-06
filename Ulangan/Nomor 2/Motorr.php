<?php
class Nomor2{

public $name, $idmesin, $typemotor;

public function __construct($name,$idmesin, $typemotor)
{
$this->name = $name;
$this->idmesin = $idmesin;
$this->typemotor = $typemotor;
}
}

$obj = new Nomor2("Yamaha H2R", "7261890", "Super Sport");

echo "Nama: " . $obj->name . '<br>';
echo "ID Mesin: " . $obj->idmesin . '<br>' ;
echo "Type Motor:" . $obj->typemotor . '<hr>';

//output : 
// Nama: Yamaha H2R
// ID Mesin: 7261890
// Type Motor:Super Sport
// ___________________________________________________________________________________________