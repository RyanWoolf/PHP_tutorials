<?php
session_start();
$id = 'egoing';
$pwd = 'codingeverybody';
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '이고잉';
        header('Location: ./session.php');
        //redirection
        exit;
      }
    }
echo '로그인 하지 못했습니다.';
// sleep(5);
echo "<br/> 페이지를 이동합니다.";
// header('Location: ./session.php');

?>