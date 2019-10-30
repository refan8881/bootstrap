<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
    
</head>
<body>

    
    
    <?php 
    class Gaji{
        public $nama,$nip,$alamat,$jhk;

        public function __construct($a,$b,$c,$d){

            $this->nama=$a;
            $this->nip=$b;
            $this->alamat=$c;
            $this->jhk=$d;
        }
        public function datadiri(){
            return "data diri";
        }
        public function totalgaji(){
            return "total gaji";
        }
        public function gajikotor(){
            $gjiktr = $this->jhk * 75000;
            return $gjiktr;
        }
        public function gajibersih(){
            $gjibersih = ($this->jhk * 75000) - ($this->jhk*75000) * (2.5/100);
            return $gjibersih;
        }
    }
    if(isset($_POST['simpan'])){
        $a =$_POST['nama'];
        $b =$_POST['nip'];
        $c =$_POST['alamat'];
        $d =$_POST['jhk'];
    }
    $hitung = new gaji($a,$b,$c,$d);
    echo "ini adalah ".$hitung->datadiri()."<br>";
    echo "nama               :".$hitung->nama."<br>";
    echo "nip                :".$hitung->nip."<br>";
    echo "alamat             :".$hitung->alamat."<br>";
    echo "jumlah hari kerja  :".$hitung->jhk."<br>";
    echo "<br> ini adalah" .$hitung->totalgaji()."<br>";
    echo "gajih kotor        :".$hitung->gajikotor()."<br>";
    echo "gajih bersih       :".$hitung->gajibersih()."<br>";

    echo "<br>";

    
    
    
    ?>
    
    
    
    
</body>
</html>