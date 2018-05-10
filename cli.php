#!/usr/bin/env php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $R  = "";
    $RR = "";
    $G  = "";
    $GG = "";
    $B  = "";
    $BB = "";
    $Y  = "";
    $YY = "";
    $X  = "";
} else {
    $R  = "\e[91m";
    $RR = "\e[91;7m";
    $G  = "\e[92m";
    $GG = "\e[92;7m";
    $B  = "\e[36m";
    $BB = "\e[36;7m";
    $Y  = "\e[93m";
    $YY = "\e[93;7m";
    $X  = "\e[0m";
    system("clear");
}
echo $Y."
 ___                       
/ (_)               |      
\__     __   __   __|   _  
/      /    /  \_/  |  |/  
\___/  \___/\__/ \_/|_/|__/";
echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : Cvar1984                   ".$R."+";
echo $B."\nGithub  : https://github.com/Cvar1984".$R."+";
echo $B."\nTeam    : BlackHole Security         ".$R."+";
echo $B."\nVersion : 4.1.1                      ".$R."+";
echo $B."\nDate    : 03-02-2018                 ".$R."+";
echo $R."\n++++++++++++++++++++++++++++++++++++++".$G."\n";
if(isset($argv[1]) AND isset($argv[2]) AND isset($argv[3])) {
if(!file_exists($argv[1])) {
	die($RR."[!] File Not Exists [!]\n$X");
}
$string=file_get_contents($argv[1]);
function hex($str) {
	$ec=bin2hex($str);
	$ec=chunk_split($ec,2,'\x');
	$ec='\x'.substr($ec,0,strlen($ec)-2);
	return $ec;
}
if($argv[2] == "--hex" OR $argv[2] == "-h") {
	ob_start();
	echo hex(gzdeflate($string));
	$string=ob_get_clean();
	$isi='<?php eval("?>".gzinflate("'.$string.'"));';
} elseif($argv[2] == "--url" OR $argv[2] == "-u") {
	$i=urlencode(gzdeflate($string));
	$isi='<?php $a="\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65";$b="\x75\x72\x6c\x64\x65\x63\x6f\x64\x65";eval("?>".$a($b("'.$i.'")));';
} else {
	die($RR."[!] Parameter False [!]\n$X");
}
$tulis=fopen($argv[3],"w+");
fwrite($tulis,$isi);
fclose($tulis);
echo "Original Size\t: ".filesize($argv[1])." Bytes\n";
echo "Encoded Size\t: ".filesize($argv[3])." Bytes\n";	
} else {
	echo $Y."--hex, -h\tHexadecimal Encode\n";
    echo "--url, -u\tUrl Encode\n\n";
    echo "Example : ".$GG."php ".$argv[0]." source.php --hex output.php".$X."\n";
}
