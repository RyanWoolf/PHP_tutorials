<?php
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}

if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
  echo "A match was found.";
} else {
  echo "A match was not found.";
}

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
  echo "A match was found.";
} else {
  echo "A match was not found.";
}

$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 0400-000-000';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
// 괄호로 감싸는건 단독으로도, 복합으로도 쓰였는지에 대해 검색한다. 캡처링
echo "<br/>";
var_dump($match);
echo "<br/>";
echo "Website: ".$match[1];
echo "<br/>";
echo "Email: ".$match[2];
?>