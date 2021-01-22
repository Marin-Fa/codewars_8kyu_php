<?php
function get_drink_by_profession(string $s): string {
//    $s = strtolower($s);
//    print_r($s);
//    switch ($s) {
//        case 'jabroni':
//            return 'Patron Tequila';
//            break;
//        case 'school counselor':
//            return 'Anything with Alcohol';
//            break;
//        case 'programmer':
//            return 'Hipster Craft Beer';
//            break;
//        case 'bike gang member':
//            return 'Moonshine';
//            break;
//        case 'politician':
//            return 'Your tax dollars';
//            break;
//        case 'rapper':
//            return 'Cristal';
//            break;
//        default: return 'Beer';
//            break;
//    }
//    return $s;
    return [
            "jabroni" =>"Patron Tequila",
            "school counselor"=>"Anything with Alcohol",
            "programmer"=>"Hipster Craft Beer",
            "bike gang member"=>"Moonshine",
            "politician"=>"Your tax dollars",
            "rapper"=>"Cristal"
        ][strtolower($s)]??"Beer";
}
