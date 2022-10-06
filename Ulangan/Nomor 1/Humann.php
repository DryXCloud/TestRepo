<?php

use Human as GlobalHuman;

    Class Human
{
  //membuat ClassObjek
        public $nama;
        public $age;
        public $major;
        public $is_active;

}

    $user = new Human();
    
        $user->nama = "Kevin Edward Wuysang";
        $user->age = 17;
        $user->major = "RPL";
        $user->is_active = "True";

        $user->nama = "Dedi Sun";
        $user->age = 18;
        $user->major = "RPL";
        $user->is_active = "True";

        echo "Nama : ". $user->nama . "<br>";
            echo "Umur : ". $user->age . "<br>";
                echo "Jurusan : ". $user->major . "<br>";
                    echo "Active : " . $user->is_active . "<hr>";

        echo "Nama : ". $user->nama . "<br>";
            echo "Umur : ". $user->age . "<br>";
                echo "Jurusan : ". $user->major . "<br>";
                    echo "Active : " . $user->is_active;


//output :
// Nama : Dedi Sun
// Umur : 18
// Jurusan : RPL
// Active : True
// ___________________________________________________________________________________
//
// Nama : Dedi Sun
// Umur : 18
// Jurusan : RPL
// Active : True
?>