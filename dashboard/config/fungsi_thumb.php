<?php

define ("MAX SIZE", "800");
define ("WIDTH", "200");
define ("HEIGHT", "200");

function make_thumb($img_name, $filename, $new_w, $new_h){
	$ext=getExtension($img_name);
	function from gd library
		if (!strcmp("jpg",$ext) || !strcmp("jpeg",$ext))
		$src_img=imagecreatefromjpeg($img_name);
		
		if (!strcmp("png",$ext))
		$src_img=imagecreatefrompng($img_name);
		
		$old_x=imageSX($src_img);
		$old_y=imageSY($src_img);
		
		$ratio1=$old_x/$new_w;
		$ratio2=$old_y/$new_h;
		if($ratio1>$ratio2){
			$thumb_w=$new_w;
			$thumb_h=$old_y/$ratio1;
			}else{
			$thumb_h=$new_h;
			$thumb_w=$old_x/$ratio2;	
			}
	$dst_img=ImageCreateTrueColor($thumb_w,$thumb_h);
	
	imagecopyresampled($dst_img,$src_img, 0, 0, 0, 0, $thumb_w,$thumb_h,$old_x,$old_y);
	
	if(!strcmp("png",$ext))
	imagepng($dst_img,$filename);
	else
	imagejpeg($dst_img,$filename);
	
	imagedestroy($dst_img);
	imagedestroy($src_img);
	}

function getExtension($str){
	$i = strrpos($str, ".");
	if(!$i){
		return "";
		}
	$l = strlen($str) - $i;
	$ext = substr($str, $i+1, $1);
	return $ext;
	}
	
$errors=0;

?>