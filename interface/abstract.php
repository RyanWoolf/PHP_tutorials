<?php
abstract class ParentClass {
  public function a() {
    echo 'a';
  }
  // 메소드 형태만, 이 클래스를 상속하는 자식은 반드시 아래 메소드를 포함하여야한다. 
  // 이 키워드를 쓰면 부모 클래스 앞에도 키워드를 붙여줘야한다
  public abstract function b();
}

class ChildClass extends ParentClass {
  // 그래서 자식에서 이 메소드를 정의하지 않으면 실행불가
  public function b() {

  }
}

?>