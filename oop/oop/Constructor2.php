<?php

class Constructor
{


    public $judul;
    public $level;


        public function __construct($judul, $level)
        {
            $this -> judul = $judul;
            $this -> level = $level;
        }

$obj = new Constructor(judul: "Membuat Constructor", level: "easy");

    echo "judul : ". $obj -> judul . "<br>";
    echo "level : ". $obj -> level;


}
?>