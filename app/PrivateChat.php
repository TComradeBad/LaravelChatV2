<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



/**
 * App\PrivateChat
 *
 * @property int $id
 * @property string $name
 * @property int $msg_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PrivateMessage[] $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat whereMsgCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateChat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrivateChat extends Model
{
    protected $table = "private_chats";

    protected $fillable = [
        "name", "msg_count"
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, "user_chat", "chat_id", "user_id");
    }

    public function messages()
    {
        return $this->hasMany(PrivateMessage::class, "chat_id");
    }
}
