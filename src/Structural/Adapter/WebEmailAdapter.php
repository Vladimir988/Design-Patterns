<?php namespace DesignPatterns\Structural\Adapter;

class WebEmailAdapter implements Notification
{
  private $mail;

  public function __construct(WebEmail $mail)
  {
    $this->mail = $mail;
  }

  public function send(string $title, string $message)
  {
    $webMessage = "# " . $title . "# " . strip_tags($message);
    $this->mail->sendMessage($webMessage);
  }
}