<?php namespace DesignPatterns\Creational\AbstractFactory;

class SteelDoor implements Door
{
  public function getDescription()
  {
    return 'It is steel door!';
  }
}