<?php

class ConstructorVersiBaru
{

    public function __construct(public $title, public $level)
        {
        
        }

}


        $obj = new ConstructorVersiBaru(title : "constructor versi baru", level : "easy");

                   echo "<font color='font-color:'green>";
             echo "<body style='background-color:cyan'>";
        echo "Name : ". $obj->title . "<br>". "Level : ". $obj->level . "<hr>";

?>