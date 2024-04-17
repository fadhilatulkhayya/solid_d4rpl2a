<?php
include_once "MahasiswaView.php";

$mahasiswa = new Mahasiswa("12345", "khayya");
$mahasiswaview = new MahasiswaView();
echo "Nim : " .$mahasiswa->getNim()."<br>";
echo "Nama : " . $mahasiswa->getNama();