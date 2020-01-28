<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



/**
 * App\PrivateMessage
 *
 * @property int $id
 * @property int $user_id
 * @property int $chat_id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\PrivateChat $chat
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PrivateMessage whereUserId($value)
 * @mixin \Eloquent
 */
class PrivateMessage extends Model
{
    protected $table = "private_messages";

    protected $fillable = [
        "text","user_id","chat_id"
    ];

    public function chat()
    {
        return $this->belongsTo(PrivateChat::class,"chat_id","id");
    }

    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }
}
