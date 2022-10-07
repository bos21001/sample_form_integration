<?php

namespace App\Containers\AppSection\SampleForm\Listeners;

use App\Containers\AppSection\SampleForm\Events\SampleFormDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleFormDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(SampleFormDeletedEvent $event): void
    {
        //
    }
}
