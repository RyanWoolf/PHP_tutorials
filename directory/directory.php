<?php 


echo getcwd().'<br/>';

chdir('../');

echo getcwd().'<br/>';


$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);


print_r($files1);
print_r($files2);

?>