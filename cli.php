#!/bin/php
<?php
if(strtolower(substr(PHP_OS,0,3)) == "win") {
$G="";
$R="";
$Y="";
$B="";
} else {
$R="\e[91m";
$RR="\e[91;7m";
$RB="\e[101m";
$G="\e[92m";
$GG="\e[92;7m";
$B="\e[36m";
$BB="\e[36;7m";
$Y="\e[93m";
$YY="\e[93;7m";
$X="\e[0m";
system("clear");
}
echo $Y."
███████╗ ██████╗ ██████╗ ██████╗ ███████╗
██╔════╝██╔════╝██╔═══██╗██╔══██╗██╔════╝
█████╗  ██║     ██║   ██║██║  ██║█████╗  
██╔══╝  ██║     ██║   ██║██║  ██║██╔══╝  
███████╗╚██████╗╚██████╔╝██████╔╝███████╗
╚══════╝ ╚═════╝ ╚═════╝ ╚═════╝ ╚══════╝";
echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : Cvar1984                   ".$R."+";
echo $B."\nGithub  : http://github.com/Cvar1984 ".$R."+";
echo $B."\nTeam    : BlackHole Security         ".$R."+";
echo $B."\nVersion : 4.0.6 ( Alpha )            ".$R."+";
echo $B."\nDate    : 03-02-2018                 ".$R."+";
echo $R."\n++++++++++++++++++++++++++++++++++++++".$G."\n";
function encode($string) {
	$hex='';
	for($i=0;$i < strlen($string);$i++) {
		$hex.=dechex(ord($string[$i]));
	}
return $hex;
}
/*
// Hex Decoder
function decode($hex) {
	$string='';
	for($i=0; $i < strlen($hex)-1;$i+=2) {
	$string .= chr(hexdec($hex[$i].$hex[$i+1]));
}
return $string;
}*/
back:
$file1=readline("Filename\t: ");
if(!file_exists($file1)) {
	echo $RR."[!] File Not Exists [!]".$X.$G."\n";
	goto back;
}
$file2=readline("Output Name\t: ");
$file=file_get_contents($file1);
if(preg_match("/<?php/",$file)) {
	$file=str_replace("<?php","",$file);
}
$file=encode(base64_encode($file));
$isi="eval(str_rot13(base64_decode('c2hhcGd2YmEgcXJwYnFyKCRQaW5lMTk4NCl7JGZnZXZhdD0nJztzYmUoJHY9MDskdjxmZ2V5cmEoJFBpbmUxOTg0KS0xOyR2Kz0yKXskZmdldmF0Lj1wdWUodXJrcXJwKCRQaW5lMTk4NFskdl0uJFBpbmUxOTg0WyR2KzFdKSk7fQ0KZXJnaGVhICRmZ2V2YXQ7fSRhdD0nZXJmZic7JG5hPSd0bWgnOyRvdj0nYnFyJzskd3Y9J2FwYnpjJzskbz0nZW5qJzskbj0naGV5cXJwJzskb25vdj0kby4kbi4kb3Y7JG5hd3ZhdD0kbmEuJHd2LiRhdDsg')));eval(\$anjing(\$babi('x%9CS%C9%CE%B7UJJ%2CV%B2%E6R%C9%2B%B1UJ53%89OIM%06q%F3sl%95%F2SRA%CC%EC%FC%BC%12%20%17H%EB%01U%E9%01%A5%AC%01%D7.%10%B0')));eval(\$kontol(decode('".$file."')));";
$tulis=fopen($file2,"w+");
fwrite($tulis,$isi);
fclose($tulis);
$file=file_get_contents($file2);
$file=rawurlencode(gzdeflate($file));
$isi='<?php eval(gzinflate(rawurldecode("'.$file.'")));';
$tulis=fopen($file2,"w+");
fwrite($tulis,$isi);
fclose($tulis);
echo $G."\nOriginal Size\t: ".$Y.filesize($file1).$G." Bytes".$X."\n";
echo $G."Encoded Size\t: ".$R.filesize($file2).$G." Bytes".$X."\n";
echo $R."=========================== Cvar1984 ))=====(@)>".$X."\n";