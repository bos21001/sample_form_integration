<?php

namespace App\Containers\AppSection\SampleForm\Listeners;

use App\Containers\AppSection\SampleForm\Events\SampleFormCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleFormCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(SampleFormCreatedEvent $event): void
    {
        //
    }
}
