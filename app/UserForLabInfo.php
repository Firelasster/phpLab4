<?php

namespace App;
#User
use App\Models\UserForLab;
use App\UserValidator;
// Класс для вывода информации о Пользователе(id,имя,mail,дата создания класса)
class UserForLabInfo
{
    public static function UserInfo(UserForLab $user)
    {
        for ($i = 1; $i <= 100; $i++)
            echo '-';

        echo ('<br>id Пользователя :' . $user->getID());
        echo ('<br>имя Пользователя :' . $user->getName());
        echo ('<br>mail Пользователя :' . $user->getMail());
        echo ('<br>время и дата создания объекта :' . $user->getTime()->format('Y-m-d H:i:s'));
        UserValidator::UserNameValidator($user);
        UserValidator::UserMailValidator($user);
        UserValidator::UserIDValidator($user);
    }
}
