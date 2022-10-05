<?php

class newConstruct

{
//mendeklarasi data / variabel

public $name;
public $level;

public function __construct()

{
$this->name = "new Constructor";
$this->level = "Easy";
}
}

//inisialisasi class objek

$obj = new newConstruct();

echo "Name : ". $obj->name = "New Construct"."<br>";
echo "Level : ". $obj->level = "Easy" . "<hr>";

?>