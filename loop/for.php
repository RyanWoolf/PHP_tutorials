<?php 
for ($i = 0; $i < 10; $i++) {
  echo "Coding Everybody"."<br>";
}

for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    echo "Executing stopped at {$i} <br/>";
    break;
  }
  echo `Coding Everybody {$i} <br/>`;
}

for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    echo "{$i} is skipped <br/>";
    continue;
  }
  echo "Coding Everybody {$i} <br/>";
}

?>