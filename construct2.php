<?php 
class siswa{
    public $nama,$alamat,$umur;


    public function __construct($a,$b,$c){
        $this->name=$a;
        $this->alamat=$b;
        $this->umur=$c;
    }

    public function datasiswa(){
        return "hallo";
    }
}
$aceng = new siswa('aceng pilek','bojong',17);
echo $aceng->datasiswa()."nama saya : $aceng->nama,alamat: $aceng->alamat,umur: $aceng->umur tahun";

?>