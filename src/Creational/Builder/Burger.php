<?php namespace DesignPatterns\Creational\Builder;

class Burger
{
  protected $size;
  protected $cheese    = false;
  protected $pepperoni = false;
  protected $lettuce   = false;
  protected $tomato    = false;

  public function __construct( BurgerBuilder $builder )
  {
    $this->size      = $builder->size;
    $this->cheese    = $builder->cheese;
    $this->pepperoni = $builder->pepperoni;
    $this->lettuce   = $builder->lettuce;
    $this->tomato    = $builder->tomato;
  }

  public function __toString(): string
  {
    $burger = 'Burger size: ' . $this->size;
    if( $this->cheese ) {
      $burger .= ' also burger with: cheese;' . PHP_EOL;
    }

    if( $this->pepperoni ) {
      $burger .= ' also burger with: pepperoni;' . PHP_EOL;
    }

    if( $this->lettuce ) {
      $burger .= ' also burger with: lettuce;' . PHP_EOL;
    }

    if( $this->tomato ) {
      $burger .= ' also burger with: tomato;' . PHP_EOL;
    }

    return $burger;
  }
}