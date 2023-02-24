<?php
class ParentClass {
  function callMethod($param){
    echo "<h1>Parent {$param}</h1>";
  }
}
class ChildClass extends ParentClass {
  // 부모클래스의 메소드를 덮어쓸때는 똑같은 이름을 가져오고 부모의 속성을 가져오는건 파렌트.
  function callMethod($param){
    parent::callMethod($param);
    echo "<h1>Child {$param}</h1>";
  }
}

$obj = new ChildClass();
$obj->callMethod('method');

?>