<?php
class Person{
  private $name;
  // Static이 붙은 변수는 클래스 차원에서 운영되어 공유함
  // 클래스 안의 멤버들에 관리함. 
  static function getCount(){
    return self::$count;
  }

  private static $count = 0;
  function __construct($name){
    $this->name = $name;
    // instance 자신을 불러오는 방식에 주의
    self::$count = self::$count + 1;
  }
  function enter(){
    echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
  }

  // 클래스 자신을 선택하는것은 self 와 ::
  // 인스턴스 자신을 선택하는 것은 this 와 화살표
  
  
}

$p1 = new Person('egoing');
$p1->enter();
$p2 = new Person('leezche');
$p2->enter();
$p3 = new Person('duru');
$p3->enter();
$p4 = new Person('sorinagi');
$p4->enter();

echo Person::getCount();
?>