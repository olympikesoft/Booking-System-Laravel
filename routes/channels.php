<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated users can listen to the channel.
|
*/

Broadcast::channel('App.users.{id}', function ($users, $id) {
    return (int) $users->id === (int) $id;
});
