<?php namespace DesignPatterns\Creational\Prototype;

class Sheep
{
  protected $name;
  protected $category;

  public function __construct( string $name, string $category = 'Smart sheep!' )
  {
    $this->name = $name;
    $this->category = $category;
  }

  public function setName( string $name )
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setCategory( string $category )
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }
}