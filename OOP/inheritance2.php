<?php
class MyFileObject extends SplFileObject{
  function getContents(){
    $content = $this->fread($this->getSize());
    $this->rewind(); // getSize로 사이즈를 읽을때 일종의 커서가 파일 가장 마지막에 남아 끝나는셈, 그래서 커서를 가장 앞으로 옮겨준다
    return $content;
  }
  
}
$file = new MyFileObject('data.txt');
// var_dump($file->fread($file->getSize()));
// $file->rewind();
// var_dump($file->fread($file->getSize()));
var_dump($file->getContents());
var_dump($file->getContents());

?>