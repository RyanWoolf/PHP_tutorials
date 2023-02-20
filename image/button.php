<?php 
header("Content-type: image/png"); // 헤더 정보는 반드시 그 무엇보다 먼저 지정되어야한다. 여러개 중첩가능. 현재 보내는 정보는 이미지다 라는 뜻
$string = $_GET['text'];
$img = imagecreatefrompng("./button.png");
// 내장함수, 대상 이미지를 이용해 새로운 이미지를 만들것이다.
$blue = imagecolorallocate($img, 60, 87, 156);
// 처음 인자는 대상 이미지, 두번째 세트는 RGB값
$px = (imagesx($img) - 7.5 * strlen($string)) / 2;
// 이미지의 가로 길이에서 폰트당 차지하는 7.5픽셀 곱하기 글자수 뺀 반으로 좌료
imagestring($img, 4, (int)$px, 9, $string, $blue);
//이미지에 스트링을 더할것이다 라는 함수
// 처음 인자는 대상 이미지(캔버스), 두번째 폰트 종류(숫자로 표현), X 좌표, Y 좌표, 들어갈 내용, 색상
// 좌료는 정수가 아니면 안된다!!
imagepng($img);
//이미지 전송
imagedestroy($img);
//이미지에 적용된 작업들을 삭제
//즉 새로운 이미지를 생성하는것이 아닌 현재 이미지에 워터마크를 달고 전송함.

?>