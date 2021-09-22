<?php namespace DesignPatterns\Creational\Singleton;

final class President
{
  private static $instance;

  private function __construct()
  {
    // hide __construct
  }

  private function __clon()
  {
    // hide __clon
  }

  private function __wakeup()
  {
    // hide __wakeup
  }

  public static function getInstance(): President
  {
    if( ! self::$instance ) {
      self::$instance = new self();
    }

    return self::$instance;
  }
}