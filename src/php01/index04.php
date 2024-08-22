<?php
$a = 5;

if ($a == 5) {
echo "\$aは5です";
}

$a = 7;

if ($a == 5) {
echo "\$aは5です";
} else {
echo "\$aは5以外です";
}

$a = 7;

if ($a == 5) {
echo "\$aは5です";
} elseif ($a == 7) {
echo "\$aは7です";
}

$people = "Saburo";

switch ($people) {
case "Taro":
echo "三郎ではありません";
break;
case "Saburo":
echo "三郎です";
break;
}

$a = 7;

echo $a == 7 ? "TRUE" : "FALSE" ;