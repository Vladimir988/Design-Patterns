<?php namespace DesignPatterns\Structural\Proxy;

class Proxy implements Subject
{
  /**
   * @var MainSubject
   */
  private $mainSubject;

  public function __construct(MainSubject $mainSubject)
  {
    $this->mainSubject = $mainSubject;
  }

  public function request(): void
  {
    $this->before();
    $this->mainSubject->request();
    $this->after();

    // or something like this:
    /*if ($this->checkAccess()) {
      $this->logAccess();
    }*/
  }

  public function before(): void
  {
    echo 'Make something before.' . PHP_EOL;
  }

  public function after(): void
  {
    echo 'Make something after.' . PHP_EOL;
  }

  public function checkAccess(): bool
  {
    // some real checking
    echo 'Proxy: Checking access prior to firing a real request.' . PHP_EOL;

    return true;
  }

  public function logAccess(): void
  {
    echo 'Proxy: Logging the time of request.' . PHP_EOL;
  }
}