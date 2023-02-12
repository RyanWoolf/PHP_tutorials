<?php
echo var_dump(1234);
echo var_dump("1234");
$a = 100;
echo gettype($a);
settype($a, 'double');
echo gettype($a);
?>