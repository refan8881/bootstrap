<?php 
class bangundatar{

    public $alas,$tinggi;

    public function __construct($a,$b){
        $this->alas=$a;
        $this->tinggi=$b;

    }
    public function segitiga(){
        $luas= ($this->alas * $this->tinggi)/2;
        return "segitiga : $luas";
    }

    


}
$hitung = new bangundatar(40,2);
    echo "alas segitiga" .$hitung->alas;
    echo "<br>";
    echo "tinggi segitiga" .$hitung->tinggi;
    echo "<br>";
    echo $hitung->segitiga();

    Class bangunruang{
        public $phi,$r;

    public function __construct($a,$b){
        $this->phi=$a;
        $this->r=$b;

    }
    public function luas_lingkaran(){
        $luas= $this->phi*$this->r*$this->r;
        return $luas;
    }
    public function keliling(){
        $keliling = 2*($this->phi*$this->r);
        return $keliling;
    }

    }
    $itung = new bangunruang(3.14,7);
    echo "Jari jari lingkaran : ".$itung->r;
    echo "<br>Luas Lingkaran : ".$itung->luas_lingkaran();
    echo "<br>Keliling Lingkaran : ".$itung->keliling();
?>