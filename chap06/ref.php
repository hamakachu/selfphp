<?php
function increment (int $num): int {
// function increment(&$num): int {
  // 引数を参照渡しすることで、元の値にも影響を及ぼす
  $num++;
  return $num;
}

$value = 10;
print increment($value);
print '<br />';
print $value;
