<!DOCTYPE html>
<html>
<head>
   
    <title>luas linkaran</title>
    
</head>
<body>
    <form action="" method="post">
        <div class="form-group">
            <label>jari-jari</label>
            <input type="number" name="jari" class="form-control">
            
            <div class="form-group">
                <button type="submit" name="simpen" class="btn btn-primary">simpan</button>
            </div>
            </div>


                <?php 
                    if(isset($_POST['simpen']))
                $jari = $_POST['jari'];
                $simpan = $_POST['simpen'];
                
                Class bangunruang{
        public $phi = 3.14,$r;

    public function __construct($b){
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
    $itung = new bangunruang($jari);
    echo "Jari jari lingkaran : ".$itung->r;
    echo "<br>Luas Lingkaran : ".$itung->luas_lingkaran();
    echo "<br>Keliling Lingkaran : ".$itung->keliling();

                
                ?>
    
    </form>
    <form action="" method="post">
        <div class="form-group">
            <label>segitiga</label>
            <input type="number" name="lingkaran" class="form-control">
            
            <div class="form-group">
                <button type="submit" name="simpan" class="btn btn-primary">simpan</button>
            </div>
            </div>


                <?php 
                    if(isset($_POST['simpan']))
                $ling = $_POST['lingkaran'];
                $simpan = $_POST['simpan'];
                
                class bangundatar{

    public $alas=3.14,$tinggi;

    public function __construct($b){
        
        $this->tinggi=$b;

    }
    public function segitiga(){
        $luas= ($this->alas * $this->tinggi)/2;
        return "segitiga : $luas";
    }

    


}
$hitung = new bangundatar($ling);
    echo "alas segitiga" .$hitung->alas;
    echo "<br>";
    echo "tinggi segitiga" .$hitung->tinggi;
    echo "<br>";
    echo $hitung->segitiga();

                
                ?>
    
</body>
</html>