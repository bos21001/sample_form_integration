<?php

namespace App\Containers\AppSection\SampleForm\Listeners;

use App\Containers\AppSection\SampleForm\Events\SampleFormFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleFormFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(SampleFormFoundByIdEvent $event): void
    {
        //
    }
}
