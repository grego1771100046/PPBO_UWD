<?php
//membuat class sepeda
class mobil{
//membuat property
private $merk;
private $harga;
private $warna;
private $type;

//membuat method konstruksi, dimana mengambil parameter merk dan harga dari class sepeda
function __construct($merk,$harga,$warna,$type){
$this->merk=$merk;
$this->harga=$harga;
$this->warna=$warna;
$this->type=$type;
}
//fungsi getter
//membuat method bacamerk
function BacaMerk(){
return $this->merk;
}
//membuat method bacaharga
function BacaHarga(){
return $this->harga;
}
//Membuat method bacawarna
function BacaWarna(){
return $this->warna;
}
//membuat method bacaharga
function BacaType(){
return $this->type;
}
function __destruct(){
echo "merk, harga dan warna telah di hapus";
}
}
//membuat objec sepeda dari kelas sepeda, yang berisi nilai dari parameter konstructor
$mobil=new mobil("SONI",500,"MERAH","APV");
//perintah untuk menampilkan pada browser dimana mengambil dari method BacaMerk dan BacaHarga
echo " Merk Mobil  =".$mobil->BacaMerk() ."<br>";
echo " Harga Mobil =".$mobil->BacaHarga()."<br>";
echo " warna Mobil =".$mobil->BacaWarna()."<br>";
echo " Type Mobil =".$mobil->BacaType()."<br>";
?>