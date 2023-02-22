<h1>Function</h1>
<?php 
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump((file_get_contents('data.txt')));
file_put_contents('data.txt', rand(1,100));
// 내용을 갈아치워버린다.
?>

<h1>Object</h1>
<?php 
$file = new SplFileObject('data.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite(rand(1,100));

// SqlFileObject : Class 일종의 설계도. 그 설계도를 통해 만들어진 기성품은 인스턴스
// new 로 오브젝트를 생성, 생성된 오브젝트는 인스턴스라 부른다.
// 클래스 안에 선언된 함수들은 메소드라 부르며 그것을 불러올때 . 이 아니라 ->로 불로온다. 신기방기
// 대상 파일 data.txt는 스테이트라 부름.
?>