<?php

namespace Fotonica\Events;

use Fotonica\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CreateNumberEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    /* @var Number $number */
    public $number;

    /**
     * Create a new event instance.
     *
     * @param \Fotonica\Number $number
     */
    public function __construct(\Fotonica\Number $number)
    {
        $this->number = $number;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['number.create'];
    }
}
