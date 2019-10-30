<!DOCTYPE html>
<html>
<head>
    
    <title>kelas 11 rpl 2</title>
    
</head>
<body>
  <form action="" method="post">
        <div class="form-group">
            <label>Nama KM</label>
            <input type="text" name="km" class="form-control">
            <br>
            <label>nama wali kelas</label>
            <input type="text" name="walikelas" class="form-control">
            <br>
            <label>bendahara</label>
            <input type="text" name="bendahara" class="form-control">
            <br>
            <label>sekertaris</label>
            <input type="text" name="sekertaris" class="form-control">
            <br>
            <label>wakil km</label>
            <input type="text" name="wkm" class="form-control">
            <br>
            
            <div class="form-group">
                <button type="submit" name="simpen" class="btn btn-primary">simpan</button>
            </div>
            </div>


                <?php 
                    if(isset($_POST['simpen']))
                $km = $_POST['km'];
                $walikelas = $_POST['walikelas'];
                $bendahara = $_POST['bendahara'];
                $sekertaris = $_POST['sekertaris'];
                $wkm = $_POST['wkm'];
                //$simpan = $_POST['simpen'];
                
                Class bangunruang{
        public $km,$walikelas,$bendahara,$sekertaris,$wkm;

    public function __construct($a,$b,$c,$d,$e){
        $this->km=$a;
        $this->walikelas=$b;
        $this->bendahara=$c;
        $this->sekertaris=$d;
        $this->wkm=$e;

    }
    public function absen(){
        return "Susunan Organigram Kelas XI RPL 2 : <br>".
        "Nama km : $this->km <br>
        nama wali kelas  : $this->walikelas <br>
        bendahara : $this->bendahara
        <br>
        sekertaris : $this->sekertaris
        <br>
        wakil km : $this->wkm";
    }
    public function organigram(){
        return "Jumlah Siswa : ";
    }

    }
    $rpl = new bangunruang($km,$walikelas,$bendahara,$sekertaris,$wkm);
    echo $rpl->absen();

                
                ?>
    
</body>
</html>