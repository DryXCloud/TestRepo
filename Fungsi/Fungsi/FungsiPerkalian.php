<?php

class FungsiPerkalian

{
    public function __construct(public $name , public $numb)
    {
    
    }


    public function title():void 

    {
        echo "Perkalian";
    }

    public function perkalian($numb_a = 50, $numb_b = 70)

    {
        return ($numb_a * $numb_b);
    }


}
$obj = new FungsiPerkalian("Name : Kevin Edward Wuysang" , numb : "Number : 777");
    echo $obj->title() . "<br>";
    echo $obj->perkalian();

    ?>