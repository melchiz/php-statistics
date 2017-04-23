<?php

include_once 'StatsMath.php';

/**
 * Description of Stats
 *
 * @author Melchizo
 */
class Stats {
    /**
     * 
     * @param array $x
     * @return type
     */
    public static function mean(array $x){
        return StatsMath::sum($x)/count($x);
    }
}
