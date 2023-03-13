<?php

namespace App\Models;

use App\Models\UserForLab;

class Comment
{
    protected   $user;
    protected string $message;

    public function __construct($user, string $message)
    {
        $this->user = $user;
        $this->message = $message;
    }
    public function showUserAndComment()
    {
            echo 'Имя пользователя: '.$this->user->getName().'<br>',
                'Mail пользователя: '.$this->user->getMail().'<br>',
                 'ID пользователя: '.$this->user->getID().'<br>',
                 'Время создания: '.$this->user->getTime()->format('Y-m-d H:i:s').'<br>',
                 'Комментарий:'.$this->message;
    }
    public function getUserCreateTime()
    {
        return $this->user->getTime();
    }
}
