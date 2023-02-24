<?php

class ParentClass{
  function a(){
    echo '<h1>Parent</h1>';
  }
  // final이 있으면 이 이후에 상속을 못하게 막는다. 메소드 뿐만 아니라 클래스 자체에도 사용가능
  final function b() {
    echo '<h1>Parent B</h1>';
  }
}

class ChildClass extends ParentClass{
  function a(){
    echo '<h1>Child</h1>';
  }


  // function b() {
  // 부모에서 파이널때문에 이 메소드 오버라이드가 불가능함.
  // }
}
?>