<?php
function arr(int $n = 0): array
{
//    $array = [];
//    for ($i = 0; $i < $n; $i++) {
//        array_push($array, $i);
//    }
//    return $array;
    return $n ? range(0, $n - 1) : [];
}
