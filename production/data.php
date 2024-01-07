<?php

//BUAT ARRAY
$gejala = array();
$gejalaBool = array();
$gejalaKlinis = array();
$gejalaKlinisMaks = array();
$gejalaKlinisString = array();
$infeksi = array();
$infeksiMaks = array();
$infeksiString = array();
$gejalaString = array();

//Inisialisasi gejala
for ($i = 0; $i <= 18; $i++) {
	$gejala[$i] = 0;
}

//Inisialisasi gejala/keluhan 
$gejalaString[0] = "anda sering mengalami buang air besar (lebih dari 2 kali)";
$gejalaString[1] = "anda mengalami berak encer";
$gejalaString[2] = "anda mengalami berak berdarah";
$gejalaString[3] = "anda merasa lesu / tidak bergairah";
$gejalaString[4] = "anda tidak selera makan";
$gejalaString[5] = "anda mual / sering muntah (lebih dari 1 kali)";
$gejalaString[6] = "anda merasa sakit di bagian perut";
$gejalaString[7] = "tekanan darah anda rendah";
$gejalaString[8] = "anda merasa pusing";
$gejalaString[9] = "anda mengalami pingsan";
$gejalaString[10] = "suhu badan anda tinggi";
$gejalaString[11] = "anda mengalami luka di bagian tertentu";
$gejalaString[12] = "anda tidak dapat menggerakkan anggota badan tertentu";
$gejalaString[13] = "anda pernah memakan sesuatu";
$gejalaString[14] = "anda memakan daging";
$gejalaString[15] = "anda memakan jamur";
$gejalaString[16] = "anda memakan makanan kaleng";
$gejalaString[17] = "anda membeli susu";
$gejalaString[18] = "anda meminum susu"; 

//Inisialisasi gejalaKlinis
for ($i = 0; $i <= 12; $i++) {
	$gejalaKlinis[$i] = 0;
}

//Inisialisasi gejala lanjut (klinis, banyak isi dari gejala)
$gejalaKlinisMaks[0] = 4;
$gejalaKlinisMaks[1] = 3;
$gejalaKlinisMaks[2] = 2;
$gejalaKlinisMaks[3] = 3;
$gejalaKlinisMaks[4] = 2;
$gejalaKlinisMaks[5] = 4;
$gejalaKlinisMaks[6] = 4;
$gejalaKlinisMaks[7] = 2;
$gejalaKlinisMaks[8] = 5;
$gejalaKlinisMaks[9] = 2;
$gejalaKlinisMaks[10] = 2;
$gejalaKlinisMaks[11] = 2;
$gejalaKlinisMaks[12] = 2;

//Inisialisasi gejalaKlinisString
$gejalaKlinisString[0] = "Mencret"; //diare
$gejalaKlinisString[1] = "Muntah"; //ada
$gejalaKlinisString[2] = "Sakit perut"; //ada
$gejalaKlinisString[3] = "Darah rendah";
$gejalaKlinisString[4] = "Koma"; //ada
$gejalaKlinisString[5] = "Demam"; //ada
$gejalaKlinisString[6] = "Septicaemia"; //ada
$gejalaKlinisString[7] = "Lumpuh"; //ada
$gejalaKlinisString[8] = "Mencret berdarah"; //diare berdarah ada
$gejalaKlinisString[9] = "Makan daging"; //ada
$gejalaKlinisString[10] = "Makan jamur"; //ada
$gejalaKlinisString[11] = "Makan makanan kaleng"; //ada
$gejalaKlinisString[12] = "Minum susu"; //ada

//Inisialisasi infeksi
for ($i = 0; $i <= 4; $i++) {
	$infeksi[$i] = 0;
}

//Inisialisasi infeksiMaks (banyak isi dari infeksi)
$infeksiMaks[0] = 5;
$infeksiMaks[1] = 5;
$infeksiMaks[2] = 6;
$infeksiMaks[3] = 3;
$infeksiMaks[4] = 4;

//Inisialisasi infeksiString
$infeksiString[0] = "Keracunan Staphylococcus Aureus"; 
$infeksiString[1] = "Keracunan Jamur Beracun";
$infeksiString[2] = "Keracunan Salmonellae";
$infeksiString[3] = "Keracunan Clostridium Botulinum";
$infeksiString[4] = "Keracunan Campylobacter";
?> 