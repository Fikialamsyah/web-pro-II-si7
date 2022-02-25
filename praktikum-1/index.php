<?php
// membuat variable user
// $namaVariable = isiVariable
$name = "Fiki Alamsyah";
$umur = 21;
$berat = 42.5;

// manampilkan variable yg telah dibuat
// echo "data yang ingin ditampilkan";
echo "<h1>Nama : " . $name ."</h1>";
echo "<br/>Umur : $umur";
echo "<br/>Berat : $berat";

// menampilkan variable sistem
echo "<br/>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br/>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable const
// define('namaVariable', nilaiVariablenya)
Define('PHI', 3.14);
$r = 10;
$luas =  PHI * $r * $r;
echo "<br/>Luas Lingkaran : $luas"; 
