<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

use App\User;

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int)$user->id === (int)$id;
});

Broadcast::channel("private-chat.{chat_id}", function ($user, $chat_id) {
    /** @var User $user */
    $chat = $user->chats()->find($chat_id);
    if (!isset($chat)) {
        return false;
    }
    return (int)$chat->id == $chat_id;

});
