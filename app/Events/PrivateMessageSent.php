<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateMessageSent implements ShouldBroadcast
{
    use SerializesModels;

    public $chat_id;
    public $message;
    public $user;

    /**
     * Create a new event instance.
     *
     * @param string $chat_id
     * @param string $message
     * @param User $user
     */
    public function __construct($chat_id, $message,$user)
    {
        $this->chat_id = $chat_id;
        $this->message = $message;
        $this->user = $user->name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('private-chat.'.$this->chat_id);
    }


}
