<?php
class sekolah{

    public $nama;
    public $alamat;


    public function datasekolah($a ="smk assalaam", $b = "situtarate")
    {

        $this->nama = $a;
        $this->alamat = $b;
        return "nama sekolah : $a,<br>alamat sekolah : $b";
    }
}
$sekolah1 = new sekolah();
echo "<br>";
echo $sekolah1->datasekolah();

?>