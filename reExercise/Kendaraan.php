<?php



class Kendaraan implements fuel{

    
        public function __construct(public $type = "Pertalite")
        {
            
        }

        public function gettype($type)
        {

            return $this->type = $type;

        }


}

//inisialisasi class objek.
$Kendaraan = new Kendaraan();
echo $Kendaraan->gettype(Type : "Solar");









?>