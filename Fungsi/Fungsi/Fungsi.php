<?php
/*1. Fungsi void tanpa parameter
  2. Fungsi void dengan parameter
  3. Fungsi void tanpa parameter dengan mengembalikan nilai fungsi dengan mengembalikan nilai*/
class Fungsi
{
//membuat fariabel
public function __construct(public $name , public $numb)
    {
    
    }

        public function title():void 

        {
            echo "Belajar fungsi";
        }

        public function getParameter($testParameter)

        {
            echo $testParameter;
        }

        public function getName() 

        {
             return $this->name;
        }

        public function perkalian($numb_a = 50, $numb_b = 70)
        {
            return ($numb_a * $numb_b);
        }




}
 
$obj = new Fungsi("Name : Kevin Edward Wuysang" , numb : "Number : 777");

        echo $obj->title() . "<br>";
            echo $obj->name . "<br>";
                echo $obj->numb . "<br>";
                    echo $obj->getName() . "<br>";
                        echo $obj->getParameter(testParameter: "Parameter : Sky") . "<br>";
                            echo $obj->perkalian();
     









?>