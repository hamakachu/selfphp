<pre>
<?php
$assoc1 = [
  'apple' => 'red',
  'orange' => 'yellow',
  'melon' => 'green'
];
$assoc2 = [
  'grape' => 'purple',
  'apple' => 'green',
  'strawberry' => 'red'
];
$result = $assoc1 + $assoc2;
print_r($result);

$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
$result2 = $ary1 + $ary2;
print_r($result2);