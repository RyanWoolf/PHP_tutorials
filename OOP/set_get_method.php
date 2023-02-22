<?php
class Person{
  private $name;
  function sayHi(){
    print("Hi, I'm {$this->name}.");
  }
  // setter
  function setName($_name){ 
    $this->ifEmptyDie($_name);
    $this->name = $_name;
  }

  // getter
  function getName(){
    return $this->name;
  }
  // 메소드 앞에도 프라이빗을 붙여서 외부에서 접근을 못하게 할수 있다. 지정을 안하면 기본적으로 퍼블릭
  private function ifEmptyDie($value){
    if(empty($value)) {
      die('I need name!');
    }
  }
}

$egoing = new Person('이고잉');
// $egoing->name = 'egoing'; // 접근 불가
$egoing->setName('egoing'); // setter
$egoing->sayHi();
$egoing->getName(); // getter
?>