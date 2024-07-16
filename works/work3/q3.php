<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$values = array(1, 2, 3, 4, 5);
$result = average(3, 4, 5, 6, 7);
echo "平均値: " . $result . "\n";


function average($a, $b, $c, $d, $e)
{
    return ($a + $b + $c + $d + $e) / 5;
}
