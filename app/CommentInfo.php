<?php

namespace App;

use App\Models\Comment;
use App\Models\UserForLab;
// Класс для вывода информации о Пользователе(id,имя,mail,дата создания класса)
class UserForLabInfo
{
    public static function CommentInfo(Comment $comment)
    {
        for ($i = 1; $i <= 100; $i++)
            echo '-';

    
    }
}
