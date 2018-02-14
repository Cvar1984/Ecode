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
system($bersih);
echo "\e[93m
 __________        _________       _________      
 ___  ____/        __  ____/______ ______  /_____ 
 __  __/   _________  /     _  __ \_  __  / _  _ \
 _  /___   _/_____// /___   / /_/ // /_/ /  /  __/
 /_____/           \____/   \____/ \__,_/   \___/";
echo "\n$red =========================== Cvar1984 ))=====(@)>";
echo "\e[36m
 Author  : Cvar1984
 Code    : PHP
 Github  : http://github.com/Cvar1984
 Team    : BlackHole Security
 Version : 4.0.5 ( Alpha )
 Date    : 03-02-2018\n";
echo "$red =========================== Cvar1984 ))=====(@)>\n";
echo "$green";
echo " (01) MD5\n";
echo " (02) Raw_URL_encode\n";
echo " (03) Convert_uuencode\n";
echo " (04) Base64_encode\n";
echo " (05) Base64_encode(str_rot13\n";
echo " (06) Base64_encode(gzdeflate\n";
echo " (07) Base64_encode(gzdeflate(str_rot13\n";
echo " (08) Base64_encode(str_rot13(gzdeflate(str_rot13\n";
echo " (XX) Exit\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
input("Chose Your Type");
$pilih=trim(fgets(STDIN, 1024));
if(!in_array($pilih, array('01','1','02','2','03','3','04','4','05','5','06','6','07','7','08','8','XX','xx'), true)) {
echo "\n $red ( ! ) Input false ( ! ) $green\n";
trim(fgets(STDIN, 1024));
goto menu;

}else {
if($pilih == "01" || $pilih == "1") {
	input("Some Word");
	$input=trim(fgets(STDIN));
	$output=md5($input);
	input("do you want write output? [y/n]");
	$pilih=trim(fgets(STDIN));
	if($pilih == "y") {
	input("Output Name");
	$namafile=trim(fgets(STDIN));
	$tulis=fopen("$namafile", "w+");
	chmod($namafile, 0777);
	fwrite($tulis, $output);
	fclose($tulis);
   }else{
		echo "\n$output\n\n";
	}
	echo "Press [ENTER]";
	fgets(STDIN);
	goto menu;
	
	}elseif($pilih == "02" || $pilih == "2") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=rawurlencode($dir);
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	 }elseif($pilih == "03" || $pilih == "3") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=convert_uuencode($dir);
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	}elseif($pilih == "04" || $pilih == "4") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=base64_encode($dir);
	 $tulis=fopen($namafile, "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	 }elseif($pilih == "05" || $pilih == "5") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=base64_encode(str_rot13($dir));
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	 }elseif($pilih == "06" || $pilih == "6") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=base64_encode(gzdeflate($dir));
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	 }elseif($pilih == "07" || $pilih == "7") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=base64_encode(gzdeflate(str_rot13($dir)));
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
	 
	 }elseif($pilih == "08" || $pilih == "8") {
	 input("Filename");
	 $input=trim(fgets(STDIN));
	 $dir=file_get_contents($input);
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
$output=base64_encode(str_rot13(gzdeflate(str_rot13($dir))));
	 $tulis=fopen("$namafile", "w+");
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press [ENTER]";
	 fgets(STDIN);
	 goto menu;
}elseif($pilih == "xx" || $pilih == "XX") {
die();
}
}
?>