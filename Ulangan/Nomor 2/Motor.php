<?php

class Motor{

    public $name;
    public $id_machine;
    public $type;

        public function __construct()
        {
            $this->name = "Yamaha H2R";
            $this->id_machine = 783150;
            $this->type = "Sport";
        }

        public function __getName()
        {
            $this->name = "BMW R10000";
            $this->id_machine = 795269;
            $this->type = "Super Sport";
        }

}

    $obj = new Motor();

    echo 'Nama Motor : ' . $obj->name . "<br>";
    echo 'Id Mesin : ' . $obj->id_machine . "<br>";
    echo 'Tipe : ' . $obj->type . "<hr>";

    echo 'Nama Motor : ' . $obj->name . "<br>";
    echo 'Id Mesin : ' . $obj->id_machine . "<br>";
    echo 'Tipe : ' . $obj->type . "<hr>";