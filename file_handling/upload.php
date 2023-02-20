

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php


var_dump($_FILES);

// exit;


ini_set("display_errors", "1");
//php.ini을 사용하지 않고 별도를 사용, 

$uploaddir = '/Applications/MAMP/htdocs/storage/';
// 저장 폴더 지정
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
// 저장 파일 설정 = 임시 폴더에 업로드된 파일 이름을 더해서 작성
// 베이스네임은 업로드한 파일만의 이름을 분리시키기 위해 사용. (/ㅇㅇ/ 이런거 제거함)
echo '<pre>';

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  // 이 함수안에서 일종의 보안상 문제가 없는지를 체크해준다. 불리앤으로 리턴. 즉 업로드하고 성공하면 트루
  // 두개 인자를 받는데 파일 경로, 이동시킬경로. 파일스 어레이의 대상 파일과 그것이 저장될 위치를 인자로 넣어준다
  echo "Successfully uploaded \n";
} else {
  print "This file can be exposed to external approach. \n";
}

echo "Detail debugging : ";
print_r($_FILES); // var_dump와 같은 역할
print "</pre>";

?> 


<img src="../storage/<?=$_FILES['userfile']['name']?>" />

</body>
</html>