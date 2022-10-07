<?php

namespace App\Containers\AppSection\SampleForm\Listeners;

use App\Containers\AppSection\SampleForm\Events\SampleFormUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleFormUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(SampleFormUpdatedEvent $event): void
    {
        //
    }
}
