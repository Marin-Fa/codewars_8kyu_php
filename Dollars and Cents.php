<?php
function format_money(float $amount): string {
//    $number = number_format($amount, 2, '.', '');
//    return '$' . $number;
    return sprintf('$%.2f', $amount);
}
