<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Message details
     *
     * @var Message
     */
    public $message;
    public $guestName;
    public $userType;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $guestName, $userType)
    {
        $this->message = $message;
        $this->guestName = $guestName;
        $this->userType = $userType;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat-message');
    }
    
    public function broadcastAs(){
        return 'message-sent';
    }
}
