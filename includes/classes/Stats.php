<?php

include_once './StatsMath.php';

/**
 * Description of Stats
 *
 * @author Melchizo
 */
class Stats {
    public static function mean(array $x){
        return StatsMath::sum($x)/coun($x);
    }
}
