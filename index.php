<?php

/*$img = imagecreatetruecolor(200, 200);
imagesavealpha($img, true);
$color = imagecolorallocatealpha($img, 0, 0, 0, 127);
imagefill($img, 0, 0, $color);
imagepng($img, 'test.png');
*/

 	$font = 25;
    $string = 'Rajdeep Tayde';
    $im = @imagecreatetruecolor(strlen($string) * $font / 1.5, $font);
    imagesavealpha($im, true);
    imagealphablending($im, false);
    $white = imagecolorallocatealpha($im, 255, 255, 255, 127);
    imagefill($im, 0, 0, $white);
    $lime = imagecolorallocate($im, 204, 255, 51);
    imagestring($im, $font, 0, 0,$string,$lime );
    /*imagepng($im, 'test.png');*/
    header("Content-type: image/png");
    /*imagepng($im);*/
    /*imagedestroy($im);*/

    /*Its easy to code*/