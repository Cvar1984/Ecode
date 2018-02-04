<?php
if(strtolower(substr(PHP_OS,0,3)) == "win") {
$bersih=cls;
}else {
$bersih=clear;
}
system("$bersih");
error_reporting(0);
function input($pesan){
	global $green;
	echo "$green $pesan >>> ";
}
function str_rot($s, $n = 13) {
    static $letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
    $n = (int)$n % 26;
    if (!$n) return $s;
    if ($n < 0) $n += 26;
    if ($n == 13) return str_rot13($s);
    $rep = substr($letters, $n * 2) . substr($letters, 0, $n * 2);
    return strtr($s, $letters, $rep);
}
// End Function
$green="\e[92m";
$red="\e[91m";
menu:
system("$bersih");
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
 Version : 3.0.5 ( Alpha )
 Date    : 03-02-2018\n";
echo "$red =========================== Cvar1984 ))=====(@)>\n";
echo "$green";
echo " (01) MD5\n";
echo " (02) Gzinflate\n";
echo " (03) Str_rot13\n";
echo " (XX) Exit\n";
echo "$red =========================== Cvar1984 ))=====(@)> \n";
input("Chose Your Type");
$pilih=trim(fgets(STDIN, 1024));
if(!in_array($pilih, array('01','1','02','2','03','3','XX','xx'), true)) {
echo "\n $red ( ! ) Input false ( ! ) $green\n";
trim(fgets(STDIN, 1024));
goto menu;

}else {
if($pilih == "01" || $pilih == "1") {
	input("Some Word");
	$input=trim(fgets(STDIN));
	$output=md5(($input));
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
		fgets(STDIN);
	}
	goto menu;
 }elseif($pilih == "02" || $pilih == "2") {
	 input("Some Word");
	 $input=trim(fgets(STDIN));
	 input("Output Name");
	 $namafile=trim(fgets(STDIN));
	 $output=gzdeflate($input, 9);
	 $tulis=fopen("$namafile", "w+");
	 chmod($namafile, 0777);
	 fwrite($tulis, $output);
	 fclose($tulis);
	 echo "Press Enter";
	 fgets(STDIN);
	 goto menu;
  }elseif($pilih == "03" || $pilih == "3") {
	 input("Some Word");
    $s = trim(fgets(STDIN));
	 for ($k = 0; $k < 10; $k++) {
    $t = microtime(1);
    for ($i = 0; $i < 1000; $i++) $s = str_rot($s, $i);
    $t = microtime(1) - $t;
    echo number_format($t, 3) . "\n";
    }
    echo "Press Enter";
    fgets(STDIN);
    goto menu;
  }elseif($pilih == "XX" || $pilih == "xx") {
	 die();
	}
}
?>