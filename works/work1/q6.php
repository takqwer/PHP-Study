<?php
//変数 num1 と num2 が等しければ「等しいです」、
//そうでなければ「等しくありません」と表示するコードを書いてください。

$num1 = 12;
$num2 = 13;

// TODO: ここにコードを追記
echo $num1, $num2;
echo "\n";

if ($num1 == $num2) {
    echo "等しいです\n";
}

if ($num1 > $num2 || $num1 < $num2) {
    echo "等しくありません\n";
}
