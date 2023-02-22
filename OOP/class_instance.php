<?php
// 클래스 선언은 대부분 언어에서 비슷하다..
class MyFileObject {
  private $filename;
  // 생성자
  function __construct($fname) {
    $this->filename = $fname;
    if(!file_exists($this->filename)) {
      die('There is no file '.$this->filename);
    }
  }
  // 변수 선언을 먼저 해줘야 사용 가능
  // 프라이빗이 있으면 외부에서 접근 불가
  // 퍼블릭으로 사용하면 외부에서 변경 가능
  function isFile() {
    return is_file($this->filename);
  }
}
$file = new MyFileObject('data.txt');
// $file = new MyFileObject();
// $file->filename = 'data.txt';
// 위의 방법으로는 외부에서 인스턴스 내부로 외부적인 접근이 생겨 데이터를 변경시킬 우려가 있다
// 그래서 캡슐화를 통해 데이터가 변경 또는 변형될 여지를 줄여서 안정성을 높인다
var_dump($file->isFile());
// var_dump($file->filename); // 프라이빗이기 때문에 접근이 불가능 

?>