<?php

/**
 *
 *
 */
class Text{

  private static $suffix = " €";

  const SUFFIX = " €";

  public static function withZero($number){
    if ($number > 9){
      return '0' . $number . self::SUFFIX;
    } else {
      return $number . self::SUFFIX;
    }
  }
}

// public static function publicWithZero($number){
//   return self::withZero($number);
//   //self = $this pour une classe
// }
