<?php

// 어떤 클래스가 반드시 가져야할 메소드가 있다면 인터페이스를 통해 제약을 건다
interface ContractInterface1{
  public function promiseMethod(array $param):int;
                              // 파라미터로 반드시 어레이가 들어와야하고 리턴으로 인트값이 와야한다는 기본설정
}
interface ContractInterface2 {
  public function promiseMethod2(array $param):int;
                              // 파라미터로 반드시 어레이가 들어와야하고 리턴으로 인트값이 와야한다는 기본설정
}

class ConcreteClass implements ContractInterface1, ContractInterface2 {
  public function promiseMethod(array $param):int 
  {
    return 1;
  }
  public function promiseMethod2(array $param):int 
  {
    return 1;
  }
}

$obj = new ConcreteClass();
$obj->promiseMethod([1,2]);
?>  