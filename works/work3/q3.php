<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$values = array(1, 2, 3, 4, 5);
$result = average($values);
echo "平均値: " . $result . "\n";


function average($values)
{
    $sum = 0;
    $count = count($values);

    //TODO sumにvaluesの合計値を入れる


    return $sum / $count;
}
