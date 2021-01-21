<?php
function quarterOf($month) {
//    $firtsQuarter = [1,2,3];
//    $secondsQuarter = [4,5,6];
//    $thirdQuarter= [7,8,9];
//    $quarterQuarter= [10,11,12];
//    for ($i = 0; $i < 3; $i++){
//        if ($firtsQuarter[$i] === $month){
//            return 1;
//        }
//        if ($secondsQuarter[$i] === $month){
//            return 2;
//        }
//        if ($thirdQuarter[$i] === $month){
//            return 3;
//        }
//        if ($quarterQuarter[$i] === $month){
//            return 4;
//        }
//
//    }
    return ceil($month / 3);
}
