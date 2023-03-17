<?php
#Validation
namespace App;

use App\Models\UserForLab;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Positive;

class UserValidator
{
    public static function UserNameValidator(UserForLab $user)
    {
        echo '<br>', 'Валидация Имени пользователя :';
        $validator = Validation::createValidator();
        $violations = $validator->validate($user->getName(), [
            new Length(['min' => 2]), // 
            new NotBlank(),
            new Regex([
                'pattern' => '/\d/',
                'match' => false,
                'message' => 'Имя не должно содержать цифры!!!'
            ]),
            new Regex([
                'pattern' => '/\s/',
                'match' => false,
                'message' => 'Имя не должно содержать пробелы!!!'
            ])

        ]);
        if (0 == count($violations))
            echo 'Валидация прошла успешно';
        else {
            // there are errors, now you can show them
            foreach ($violations as $violation) {
                echo $violation->getMessage();
            }
        }
    }
    public static function UserMailValidator(UserForLab $user)
    {
        echo '<br>', 'Валидация Mail пользователя :';
        $validator = Validation::createValidator();
        $violations = $validator->validate($user->getMail(), [
            new Length(['min' => 7]),
            new NotBlank(),
            new Regex([
                'pattern' => '/^\S+@\S+\.\S+$/',
                'match' => true,
                'message' => "Невалидная почта"
            ])
        ]);
        if (0 == count($violations))
            echo 'Валидация прошла успешно';
        else {
            // there are errors, now you can show them
            foreach ($violations as $violation) {
                echo  $violation->getMessage();
            }
        }
    }
    public static function UserIDValidator(UserForLab $user)
    {
        echo '<br>', 'Валидация ID пользователя :';
        $validator = Validation::createValidator();
        $violations = $validator->validate($user->getID(), [
            new NotBlank(),
            new Positive()

        ]);
        if (0 == count($violations))
            echo 'Валидация прошла успешно';

        else {
            // there are errors, now you can show them
            foreach ($violations as $violation) {
                echo $violation->getMessage() . '<br>';
            }
        }
    }
}
