<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Math
 *
 * @author Melchiz Oyamo
 */
abstract class Math {
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function add(float $x, float $y){
        return $x + $y;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function sub(float $x, float $y){
        return $x - $y;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function mul(float $x, float $y){
        return $x * $y;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function div(float $x, float $y){
        return $x / $y;
    }
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function mod(float $x, float $y){
        return $x % $y;
    }
    
    /**
     * 
     * @param float $x a float data type
     * @param float $y a float data type
     * @return float
     */
    public static function remainder(float $x, float $y){
        return $x % $y;
    }
   
}
