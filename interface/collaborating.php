<?php
// 인터페이스를 활용하는 예로 협업을 할때이다.
// 어떤 클래스를 만들어 달라고 협업 요청을 할때 이런이런 자료와 구조로 해주세요라고 말로 전달하는 대신
// 아래와 같이 인터페이스를 정의하고 더미 클래스로 이런식으로 해달라는고 남겨두면


interface ContractInterface
{
  public function compare(string $str1, string $str2):bool;
}

class Dummy implements ContractInterface
{
  public function compare(string $str1, string $str2):bool
  {
    return true;
  }
}

// public function pushHandler(Interface $var) 이런식으로도 쓸수 있음. 들어오는 변수는 인터페이스를 만족하는 조건의 클래스만 들어올수 있다 이런 의미

// 주어진 구조에 따라 새로 클라스를 만들기만 하면된다. 그러면 결과를 비교적 더 빠르고 효율적으로 쓸수 있게 함.

class Concrete implements ContractInterface
{
  public function compare(string $str1, string $str2):bool
  {
    if($str1 === $str2)
      return true;
    else 
      return false;
  }
}

$obj = new Concrete();
if ($obj->compare('test1', 'test2')) {
  echo '<h1>same</h1>';
} else {
  echo '<h1>different</h1>';
}


?>