<?php

class siswa{

    public $nama = null;
    public $alamat = null;
    public $usia = null;

        public function datadiri($nama,$alamat,$usia){

            $this->nama =$nama;
            $this->alamat =$alamat;
            $this->usia =$usia;
            $this->datahobi($this->hobi);
            return "nama : $nama,alamat: $alamat,usia : $usia";

        }
        public function datahobi($hobi){


            $this->hobi =$hobi;
            
            return "hobi : $hobi";
        }
}
$siswa1 = new siswa();
echo $siswa1->datadiri("ahmad","bandung",18);
echo $siswa1->datahobi("mancing");





?>