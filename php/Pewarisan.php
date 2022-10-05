<?php

    trait Role {
        abstract public function getRole():String;
    }
        class Babeh {

            public $nama;
            public $umur;
            public $marga;
            public static $index;
            public $is_status;

                //membuat construct
                public function __construct($nama, $umur, $is_status = 'Anak')
                {
                    $this->nama = $nama;
                    $this->umur = $umur;
                    $this->marga = 'Tan';
                    self::$index = 1;
                    $this->is_status = $is_status;
                }


                public function getMarga(){
                    return $this->marga;
                }

                public function getName(){
                    return $this->nama;
                }

                public function getStatus(){
                    return $this->is_status;
                }

                public function getUmur(){
                    return $this->umur;
                }

                public function display(){
                    echo 'No. ' . self::$index++ . '<br>';
                    echo 'Nama : ' . $this->getName() . '<br>';
                    echo 'Marga : ' . $this->getMarga() . '<br>';
                    echo 'Umur : ' . $this->getUmur() . '<br>';
                    if ($this->is_status == "Bapak") {
                        echo 'Status : '  . $this->getStatus() . '<br>';
                        $this->space() . '<br>';
                    }else{
                        echo 'status : ' . $this->getStatus() . '<br>';
                    }
                }


            public function space(){
                echo '<hr>';
            }
        }

class Bocil extends Babeh {
    use Role;

    public $role;

            public function __construct($nama, $umur, $is_status, $role = "Siswa")
            {
                parent::__construct($nama, $umur, $is_status);
                $this->nama = $nama;
                $this->umur = $umur;
                $this->role = $role;
            }


    public function getAlDisplay()
    {
        $this->display() . '<br>';
        echo 'Jabatan : ' . $this->getRole();
    }

    public function getRole(): String
    {
        return $this->role;
    }
}

    //inisialisasi class objek
        $babeh = new Babeh("Asep" , 37, 'Bapak');
    
        $bocil = new Bocil("Arief", 15, 'Anak');
        $bocil1 = new Bocil("Strio" , 17, 'Anak');

                echo $babeh->display();
                echo $bocil->getAlDisplay();


//output :
// No. 1
// Nama : Asep
// Marga : Tan
// Umur : 37
// Status : Bapak
//---------------------------------------
// No. 2
// Nama : Arief
// Marga : Tan
// Umur : 15
// status : Anak
// Jabatan : Siswa
?>