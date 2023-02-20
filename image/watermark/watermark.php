<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('original.png');
 
// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);
 
// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
// 이미지를 복사해서 새로 만든다. 인자로는 캔버스. 워터마크이미지, x좌표, y좌표, 나머지 네자리는 워터마크의 시작점의 x축, y축, 끝나는 지점의 x축, y축



// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>