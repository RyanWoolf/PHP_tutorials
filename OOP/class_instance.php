<?php
// 클래스 선언은 대부분 언어에서 비슷하다..
class MyFileObject {
  // 생성자
  function __construct($fname) {
    $this->filename = $fname;

  }
  // 변수 선언을 먼저 해줘야 사용 가능
  public $filename;
  function isFile() {
    return is_file($this->filename);
  }
}
$file = new MyFileObject('data.txt');
$file->filename = 'data.txt';
var_dump($file->isFile());

?>