<?php
function problem($x){
//    if( is_string($x) ){
//        return "Error" ;
//    }
//    else{
//        return ($x*50) + 6;
//    }
    return is_string($x) ? 'Error' : $x * 50 + 6;
}
