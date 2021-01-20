<?php
function pipeFix($numbers) {
//    $result = [];
//    for ($i = $numbers[0]; $i <= end($numbers); $i++) {
//        array_push($result, $i);
//    }
//    return $result;
    return range(min($numbers), max($numbers));
}
