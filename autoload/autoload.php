<?php
// import에 실패할 경우 아래로 등록해둔 함수를 호출해온다. 에러도 표시함
spl_autoload_register(function($path) {
  // module import
  // require_once 'greeting.php';
  // path 변수를 줌으로써 그와 같은 모듈을 찾아서 불러옴
  $path = str_replace('\\', '/', $path);
  // 찾을 대상, 변경할 대상, 파일
  $path = $path.".php";
  print("Path :  {$path}");
  require_once $path;
});
// 일종의 보험과 같은

?>