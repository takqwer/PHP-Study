<?php

// 以下の配列をの要素のうち文字数が偶数のもののみ表示するループを書いてください
$fruits = array("Apple", "Banana", "Cherry");

for ($i = 0; $i < count($fruits); $i++) {
    $length = mb_strlen($fruits[$i]);
    if ($length % 2 == 0) {

        echo "$fruits[$i]\n";
    }
}
