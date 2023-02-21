<?php 

session_save_path('../session');
// 세션을 어디에 저장할지
session_start();
// 세션 사용을 시작함. 처음에 사용되어야한다.
$_SESSION['OpenTutorials'] = "OTs"
?>
