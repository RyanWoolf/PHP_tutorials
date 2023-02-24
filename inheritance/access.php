<?php

use ChildClass as GlobalChildClass;

class ParentClass{
  public $_public = '<h1>public</h1>';
  protected $_protected = '<h1>protected</h1>';
  private $_private = '<h1>private</h1>';


}
class ChildClass extends ParentClass {
  function callPublic() {
    echo $this->_public;
  }
  function callProtected() {
    echo $this->_protected;
  }
  // function callPrivate() {
  //   echo $this->_private;
  // }
}

$obj = new ChildClass();

echo $obj->_public;
// private이므로 자식에서도 접근 불가
// echo $obj->_private;

// 프로텍트는 인스턴스에서 직접 접속은 불가능하지만 메소드로서는 접근가능
// echo $obj->_protected;


$obj->callPublic();
// $obj->callPrivate();
$obj->callProtected();






?>