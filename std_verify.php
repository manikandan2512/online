<?php
header('Content-type: image/jpeg');
$img_width=55;
$img_height=23;
$img=imagecreatetruecolor($img_width,$img_height);
imagefill($img,0,0,0xFFCC00) ;
for($i=0;$i<60;$i++)
{
  $x=rand(0,$img_width-1);
  $y=rand(0,$img_height-1);
  imagesetpixel($img,$x,$y,0x000000);
}
$x=rand(1,5);
$y=rand(1,5);
$rand_string=rand(1000,9999);
imagestring($img,5,$x,$y,$rand_string,0x000000);
setcookie('rungta',(md5($rand_string)).'b81144');
imagejpeg($img);
imagedestroy($img);
?>