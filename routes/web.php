<?php
#Main file
use Illuminate\Support\Facades\Route;

use App\Models\UserForLab;
use App\UserForLabInfo;
use App\Models\Comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return;
});

$user1 = new UserForLab(4, '12@mail.ru', 'I van1');
UserForLabInfo::UserInfo($user1);
echo ('<br>');
$user2 = new UserForLab(0, 'dsmidsm@mail.com', '123');
UserForLabInfo::UserInfo($user2);
$user3 = new UserForLab(-1, 'dsmidsmmail.com', '12sss 3');
UserForLabInfo::UserInfo($user3);
echo ('<br>-----------------------------<br>');
$comment1 = new Comment($user1, 'Hello1');
$comment2 = new Comment($user2, 'Hello2');
$comment3 = new Comment($user3, 'Hello3');
$comments = array($comment1, $comment2, $comment3);
$datetime1 = new DateTime('2023-03-13 23:50:00');
foreach ($comments as $value) {

  if($value->getUserCreateTime() > $datetime1)
    $value->showUserAndComment();
    echo '<br>---------------------------------------------<br>';
}

$datetime2 = new DateTime('2022-03-13 23:50:00');
foreach ($comments as $value) {

  if($value->getUserCreateTime() > $datetime2)
    $value->showUserAndComment();
    echo '<br>---------------------------------------------<br>';
}

