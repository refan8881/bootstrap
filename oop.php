<?php
class ayam{
 public $jumlah_kaki = 2;
 public $warna = 'putih';
 public $frekuensi_suara = 20.7;
 public $makan = true;

 public function bertengkar($var, $par)
 {
     return "ayam selalu bertengkar jika memperebutkan " .$var. 'dan' .$par;
 }
 public function makan( $var1, $par1)
 {
     return "ayam selalu  mencari makan " .$var1. 'dan' .$par1;
 }
 public function berkembang($var2, $par2)
 {
     return "ayam berkembang biak dengan " .$var2. 'dan' .$par2;
 }
 public function berkokok($var3, $par3)
 {
     return "ayam selalu berkokok di ".$var3. 'dan' .$par3;
 }
 public function jenis($var4,$par4)
 {
     return "ayam memiliki banyak jenis".$var4. 'dan' .$par4;
 }


}

$ayam_asli = new ayam;
echo $ayam_asli->jumlah_kaki;
echo '<br>' . $ayam_asli->warna;
echo '<br>' . $ayam_asli->frekuensi_suara;
echo '<br>' . $ayam_asli->makan;
echo '<hr>';
echo '<br>' . $ayam_asli->bertengkar('wilayah' , 'pasangan');
echo '<br>' . $ayam_asli->makan('cacing','layer');
echo '<br>' . $ayam_asli->berkembang('beranak','bertelur');
echo '<br>' . $ayam_asli->berkokok('siang','malam');
echo '<br>' . $ayam_asli->jenis('kate','boiler');
?>