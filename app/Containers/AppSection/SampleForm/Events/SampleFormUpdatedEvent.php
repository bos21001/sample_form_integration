<?php

namespace App\Containers\AppSection\SampleForm\Events;

use App\Containers\AppSection\SampleForm\Models\SampleForm;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class SampleFormUpdatedEvent extends ParentEvent
{
    public function __construct(
        public SampleForm $sampleform
    ) {
    }

    public function broadcastOn(): Channel|array
    {
        return new PrivateChannel('channel-name');
    }
}
