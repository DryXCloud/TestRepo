<?php

class childclass
{  
    public function __construct(
        public $nameClass = "Child Class",
        public $level = "easy"
        ){}

}

    $childClass = new childclass();

    echo "<font color='font-color:'green>";
        echo "<body style='background-color:cyan'>";
            echo $childClass->nameClass . "<br>" . $childClass->level . "<hr>"; 

?>