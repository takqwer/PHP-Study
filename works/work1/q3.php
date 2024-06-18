<?php
//変数 num が偶数であれば「偶数です」、奇数であれば「奇数です」と表示するコードを書いてください
$num = 3;

// TODO: ここにコードを追記
echo $num;
echo "\n";

$var1 = $num % 2;

if ($var1 == 0) {
    echo "偶数です\n";
}

if ($var1 > 0) {
    echo "奇数です\n";
}
