<?php

namespace App\Models;

use DateTime;

class UserForLab
{
  protected int $id;
  protected string $mail;
  protected string $name;

  public function __construct(int $id, string $mail, string $name)
  {
    $this->id = $id;
    $this->mail = $mail;
    $this->name = $name;
  }
  public function setID($ID)
  {
    $this->id = $ID;
  }

  public function getID()
  {
    return $this->id;
  }
  public function setName($Name)
  {
    $this->name = $Name;
  }

  public function getName()
  {
    return $this->name;
  }
  public function setMail($Mail)
  {
    $this->mail = $Mail;
  }

  public function getMail()
  {
    return $this->mail;
  }

  public function getTime()
  {
    date_default_timezone_set('Europe/Moscow');
    $date = new DateTime(date('Y-m-d H:i:s'));
    return $date;
  }
}
