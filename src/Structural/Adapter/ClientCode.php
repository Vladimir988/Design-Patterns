<?php namespace DesignPatterns\Structural\Adapter;

class ClientCode
{
  private $notification;

  public function __construct(Notification $notification)
  {
    $this->notification = $notification;
  }

  public function send(string $title, string $message)
  {
    $this->notification->send($title, $message);
  }
}