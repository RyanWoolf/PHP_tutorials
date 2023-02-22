<?php
class Animal{
  function run(){
    print('running.. <br>');
  }
  function breathe(){
    print('breathing.. <br>');
  }
}

$ani = new Animal();
$ani->run();
$ani->breathe();

// Animal 클래스를 상속하여 애니멀 안의 모든 기능을 가져오고 확장하여 새 클라스를 정의함
class Human extends Animal{
  function think(){
    print('thinking.. <br>');
  }
  function talk(){
    print('talking.. <br>');
  }
}
?>