<?php 
ini_set("display_errors", "1");
session_save_path("../session");
session_start();
echo $_SESSION['OpenTutorials'];
echo file_get_contents('../session/sess_'.session_id())
?>
