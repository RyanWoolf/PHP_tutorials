<?php 
function numbering() {
  $i = 0;
  while ($i < 10) {
    echo $i."<br/>";
    $i ++ ;
  }
}

numbering();

function get_argument($arg=100) {
  return $arg;
}


echo get_argument(3);
echo get_argument();


function get_arguments($arg1, $arg2) {
  return $arg1 + $arg2;
}


print get_arguments(10, 20);
print get_arguments("10", "20");
// print get_arguments("Hi", "10");




?>