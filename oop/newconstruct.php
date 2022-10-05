<?php


new newConstruct {
//mendeklarasi data member / variable
public $name;
public $level;


public function __construct()
{
$this->name = "new Constructor";
$this->level = "easy";
}
}

$obj = new newConstruct();

echo "judul" . $obj->nama> = "New Constructor" . "<br>";
echo "judul" . $obj->level> = "easy";
?>