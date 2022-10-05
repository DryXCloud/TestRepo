<?php

class parentclass
{  
    public function __construct(
        public $nameClass = "Parent Class",
        public $level = "easy"
        ){}

}

    $parentClass = new parentclass();


class ChildClass extends parentclass
{

}

    $parentClass = new ParentClass(nameClass : "Name Class : Parent Class", level : "Level : easy");

    $childClass = new Childclass(nameClass : "Name Class : Cild Class", level : "Level : easy");

    echo "<font color='font-color:cyan'>";
        echo "<body style='background-color:cyan'>";

            echo $childClass->nameClass . "<br>" . $childClass->level . "<hr>"; 

            echo $parentClass->nameClass . "<br>" . $parentClass->level . "<hr>";

?>