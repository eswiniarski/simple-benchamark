<?php

function is_prime($n) {
    for($i = 2; $i<$n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

function get_prime($n) {
    $count = 0;
    $num = 2;

    while($n > $count) {
        if (is_prime($num)) {
            $count += 1;
        }
        
        $num += 1;
    }

    return $num -1;
}

echo get_prime(10001);