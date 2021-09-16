<?php namespace DesignPatterns\Creational\SimpleFactory;

class DoorFactory
{
  public static function makeDoor( float $width, float $height ): Door
  {
    return new SteelDoor( $width, $height );
  }
}