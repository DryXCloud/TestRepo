<?
class Constructor
{
    //membuat constructor
    public $judul;
    public $level;

        public function __construct($judul, $level)
        {
            $this -> judul = $judul;
            $this -> level = $level;
        }

}
//menampilkan Tulisan Di Bawah ini.
$obj = new Constructor(judul : "Membuat Constructor", level : "medium")

    echo "Nama : ". $obj -> nama . "<br>";
    echo 

?>