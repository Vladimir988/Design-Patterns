<?php namespace DesignPatterns\Structural\Proxy;

class ClientCode
{
  /**
   * @var subject
   */
  private $subject;

  public function __construct(Subject $subject)
  {
    $this->subject = $subject;
  }

  public function request()
  {
    $this->subject->request();
  }
}