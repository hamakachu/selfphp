<?php
$data = [1,2,3,4,5];
[ ,$a,  ,$b,$c] = $data;
print $a;
print $b;
print $c;

$map = ['title' => 'Python', 'price' => '3000'];
['title' => $title, 'price' => $price] = $map;
print $title;
print $price;