<?php

/**
 *
 *
 */
class Text{

  private static $suffix = " €";


  // public static function publicWithZero($number){
  //   return self::withZero($number);
  //   //self = $this pour une classe
  // }
  public static function withZero($number){
    if ($number > 9){
      return '0' . $number . self::$suffix;
    } else {
      return $number . self::$suffix;
    }
  }
}
