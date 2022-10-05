<?php
    
    Class TugasMembuatClassObejk
{
  //membuat ClassObjek
        public $nama;
        public $umur;
        public $jurusan;

}

    $user = new TugasMembuatClassObejk();
    
        $user->nama = "dedi";
        $user->umur = 17;
        $user->kelas = "XII RPL";

        echo "Nama : ". $user->nama . "<br>";
            echo "Umur : ". $user->umur . "<br>";
                echo "Jurusan : ". $user->jurusan . "<br>";
                    echo "Kelas : ". $user->kelas . "<br>";




