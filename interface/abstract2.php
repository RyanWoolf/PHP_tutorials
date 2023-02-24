<?php
abstract class ParentClass{
  public function a(){
    echo '<h1>a</h1>';
  }
  // Abstract 를 사용하려면 이름만 정의하고 내용은 없어야한다.
  public abstract function b();
}


class ChildClass extends ParentClass{
  public function b() {
    
  }

}


?>