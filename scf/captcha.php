<?php
	session_start();
 
	// generate random number and store in session
 
	$randomnr = rand(10000, 99999);
	$_SESSION['captcha'] = md5($randomnr);
 
	//generate image
	$im = imagecreatetruecolor(180, 48);
 
	//colors:
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 167, 208, 255);
	$black = imagecolorallocate($im, 0, 110, 234);
 
	imagefilledrectangle($im, 0, 0, 180, 48, $white);
 
	//path to font:
 
	$font = 'font.ttf';
 
	//draw text:
	
	imagettftext($im, 40, 0, 27, 48, $grey, $font, $randomnr);
 
	imagettftext($im, 40, 0, 20, 42, $black, $font, $randomnr);
 
	// prevent client side  caching
	header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
 
	//send image to browser
	header ("Content-type: image/png");
	imagepng($im);
	imagedestroy($im);
?>