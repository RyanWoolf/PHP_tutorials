<?php 
$list = ["Ryan", "Ben", "Brad"];

echo $list[0]."<br/>";
echo $list[1]."<br/>";
echo $list[2]."<br/>";


function get_members() {
  return ["Ryan", "Ben", "Brad"];
}

echo get_members()[1];
echo "<br/>";


array_push($list, "Lincoln");
echo $list[count($list)-1]."<br/>";



array_unshift($list, 'Darcy');
echo $list[0]."<br/>";

array_shift($list);
echo $list[0]."<br/>";

array_pop($list);
echo $list[count($list)-1]."<br/>";



$grades = array('egoing' => 10);
$another = [];

$another["Ryan"] = 100


?>