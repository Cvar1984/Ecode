<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ecode</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		.button {
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    background-color: white;
    color: black;
    border: 2px solid #e1dfdd;
    padding: 2px 5px;
}
	</style>

<div class="container-contact100">
		<div class="wrap-contact100">
				<span class="contact100-form-title">
					PHP Encode & Decode
				</span>
<form method="post">
<div class="wrap-input100 validate-input">
					<textarea cols="80" rows="10" style="height: 83px;" class="input100" name="code" placeholder="Your Script"></textarea>
					<span class="focus-input100"></span>
				</div>
<center>
	<select class='select2-selection--single' size="1" name="ope">
	<option value="urlencode">url</option>
	<option value="base64">Base64</option>
	<option value="ur">base64 - convert_uu</option>
	<option value="gzinflates">gzinflate - base64</option>
	<option value="str2">str_rot13 - base64</option>
	<option value="gzinflate">str_rot13 - gzinflate - base64</option>
	<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
	<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
</select>
<br>
<input  class='button' type='submit' name='submit' value='Encode'>
<input class='button' type='submit' name='submits' value='Decode'>
</center>
</form>

<?php 
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['code'];
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {
case 'base64': $codi=base64_encode($text);
$codi="<?php eval('?>'.base64_decode('$codi'));";
break;
case 'str' : $codi=base64_encode(str_rot13(gzdeflate(str_rot13($text))));
$codi="<?php eval('?>'.str_rot13(gzinflate(str_rot13(base64_decode('$codi')))));";
break;
case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
$codi="<?php eval('?>'.str_rot13(gzinflate(base64_decode('$codi'))));";
break;
case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
$codi="<?php eval('?>'.gzinflate(base64_decode('$codi')));";
break;
case 'str2' : $codi=base64_encode(str_rot13($text));
$codi="<?php eval('?>'.str_rot13(base64_decode('$codi')));";
break;
case 'urlencode' : $codi=rawurlencode($text);
$codi="<?php eval('?>'.rawurldecode('$codi'));";
break;
case 'ur' : $codi=base64_encode(convert_uuencode($text));
$codi="<?php eval('?>'.convert_uudecode(base64_decode('$codi')));";
break;
case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
$codi="<?php eval('?>'.base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode('$codi')))))));";
break;
default:break;
}
}
$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=base64_encode(convert_uudecode($text));
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
echo '<textarea style="height:83px;" cols="80" rows="10" class="input100" readonly>'.$codi.'</textarea>';