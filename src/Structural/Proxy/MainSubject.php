<?php namespace DesignPatterns\Structural\Proxy;

class MainSubject implements Subject
{
  public function request(): void
  {
    echo "MainSubject: Handling request." . PHP_EOL;
  }
}