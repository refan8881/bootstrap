<?php 
class Manusia{
    public $umur,$tgl_lahir;
    protected $jenis_lawan;
    private $status;

    public function makan(){
        return "manusia juga butuh makan";
    }
    public function minum(){
        return "manusia juga butuh minum";
    }
    public function ambil_status($status_saat_ini){
        return $this->status=$status_saat_ini;
    }

    public function status_gua(){
        return "barbar namun kadang ambyar";
    }

}
class pria extends Manusia{
    public function jk($jk){
        return $this->jenis_kelamin=$jk;

    }
    public function datadiri()
    {
        $datadiri= "<br> aku seorang".$this->jenis_kelamin;
        $datadiri.="<br> yang lahir pada ".$this->tgl_lahir;
        $datadiri.="<br> sampai saat ini masih". $this->status_gua();
        $datadiri.="<br> karena saya masih ".$this->umur;
        $datadiri.="<br> belum pantas untuk menikah<br>";
        return $datadiri;
    }
    
}

$saya = new pria();
$saya->tgl_lahir="8 agustus 2001";
$saya->jk("laki-laki");
$saya->ambil_status("lajang");
$saya->umur="18 tahun";

echo $saya->datadiri();
echo $saya->makan()."<br>";
echo $saya->minum();

?>