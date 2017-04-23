<?php

include_once './Math.php';
/**
 * Description of StatsMath
 *
 * @author Melchizo
 */
class StatsMath{
    /**
     * 
     * @param array $x an array of float data type
     * @return float
     */
    public static function sum(array $x){
        $s = 0;
        foreach ($x as $value) {
            $s += $value;
        }
        return $s;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function diff(array $x, array $y) {
        $s = [];
        for ($i = 0; $i < count($x); $i++) {
            $x[i] = Math::sub($x, $y);
        }
        return $s;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function rem(array $x, array $y){
         $s = [];
        for ($i = 0; $i < count($x); $i++) {
            $x[i] = Math::mod($x, $y);
        }
        return $s;
    }
}
