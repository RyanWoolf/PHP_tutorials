<?php
ini_set("display_errors", "1");
session_start();
// 세션을 사용하는 모든 페이지는 불러와야함
session_destroy();
// 세션 데이터를 삭제한다
header('Location: ./login.html');
?>