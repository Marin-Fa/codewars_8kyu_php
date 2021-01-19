<?php
function flip(string $dir, array $arr): array
{
//    if ('L' == $dir) {
//        rsort($arr);
//    } else {
//        sort($arr);
//    }
//    return $arr;
    $dir == 'L' ? rsort ( $arr ) : sort( $arr );
    return $arr;
}
