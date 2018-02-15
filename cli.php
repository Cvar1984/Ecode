#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS,0,3)) == "win") {
$bersih=cls;
}else {
$bersih=clear;
}
system($bersih);
error_reporting(0);
function input($pesan){
global $green;
echo "$green $pesan >>> ";
}
$green="\e[92m";
$red="\e[91m";
menu:
function banner() {
global $red,$bersih;
system($bersih);
echo "\e[93m
  ______                      _        
 |  ____|                    | |       
 | |__      ___    ___     __| |   ___ 
 |  __|    / __|  / _ \   / _` |  / _ \
 | |____  | (__  | (_) | | (_| | |  __/
 |______|  \___|  \___/   \__,_|  \___|";
echo "\n$red =========================== Cvar1984 ))=====(@)>";
echo "\e[36m
 Author  : Cvar1984
 Code    : PHP
 Github  : http://github.com/Cvar1984
 Team    : BlackHole Security
 Version : 4.0.5 ( Alpha )
 Date    : 03-02-2018\n";
echo "$red =========================== Cvar1984 ))=====(@)>\n";}
banner();
echo "$green";
echo " (01) Encode\n";
echo " (02) Decode\n";
echo "$red =========================== Cvar1984 ))=====(@)>\n";
input("Encode / Decode?");
$pilihan=trim(fgets(STDIN));
if($pilihan == "01" || $pilihan == "1") {
$pilihan="encode";
banner();
echo "$green";
echo " (01) MD5\n";
echo " (02) Raw_url\n";
echo " (03) Convert_uu\n";
echo " (04) Base64\n";
echo " (05) Base64(str_rot13\n";
echo " (06) Base64(gzdeflate\n";
echo " (07) Base64(gzdeflate(str_rot13\n";
echo " (08) Base64(str_rot13(gzdeflate(str_rot13\n";
echo " (09) Base64(gzdeflate(convert_uu(str_rot13(gzdeflate(base64\n";
echo " (XX) Exit\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
}else {
$pilihan="decode";
banner();
echo "$green";
echo " (01) Back\n";
echo " (02) Raw_url\n";
echo " (03) Convert_uu\n";
echo " (04) Base64\n";
echo " (05) Base64(str_rot13\n";
echo " (06) Base64(gzdeflate\n";
echo " (07) Base64(gzdeflate(str_rot13\n";
echo " (08) Base64(str_rot13(gzdeflate(str_rot13\n";
echo " (09) Base64(gzdeflate(convert_uu(str_rot13(gzdeflate(base64\n";
echo " (XX) Exit\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
}
input("Chose Your Type");
$pilih=trim(fgets(STDIN));
if(!in_array($pilih, array('01','1','02','2','03','3','04','4','05','5','06','6','07','7','08','8','09','9','XX','xx'), true)) {
echo "\n $red ( ! ) Input false ( ! ) $green\n";
fgets(STDIN, 1024);
goto menu;
}else {
if($pilih == "01" || $pilih == "1") {
	if($pilihan == "decode") {
	goto menu;
	}
	input("Some Word");
	$input=trim(fgets(STDIN));
	$output=md5($input);
	input("Do you want write output? [y/n]");
	$pilih=trim(fgets(STDIN));
	if($pilih == "y") {
	input("Output Name");
	$namafile=trim(fgets(STDIN));
	$tulis=fopen("$namafile", "w+");
	fwrite($tulis, $output);
	fclose($tulis);
}
	else{
	echo "\n$output\n\n";
}
	echo "Press [ENTER]";
	fgets(STDIN);
	goto menu;
}
	 elseif($pilih == "02" || $pilih == "2") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=rawurlencode($dir);
	 }
	 else {
	 $output=rawurldecode($dir);
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "03" || $pilih == "3") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=convert_uuencode($dir);
	 }else {
	 $output=convert_uudecode($dir);
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "04" || $pilih == "4") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=base64_encode($dir);
	 }else {
	 $output=base64_decode($dir);
	 }
	 $tulis=fopen($namafile, "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "05" || $pilih == "5") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=base64_encode(str_rot13($dir));
	 }else {
	 $output=str_rot13(base64_decode($dir));
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "06" || $pilih == "6") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=base64_encode(gzdeflate($dir));
	 }else {
	 $output=gzinflate(base64_decode($dir));
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "07" || $pilih == "7") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
	 $output=base64_encode(gzdeflate(str_rot13($dir)));
	 }else {
	 $output=str_rot13(gzinflate(base64_decode($dir)));
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "08" || $pilih == "8") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
$output=base64_encode(str_rot13(gzdeflate(str_rot13($dir))));
	 }else {
	 $output=str_rot13(gzinflate(str_rot13(base64_decode($dir))));
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "09" || $pilih == "9") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 if($pilihan == "encode") {
$output=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($dir))))));
	 }else {
	 $output=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode($dir))))));
	 }
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}
	 elseif($pilih == "xx" || $pilih == "XX") {
	 die();
}
}
?>