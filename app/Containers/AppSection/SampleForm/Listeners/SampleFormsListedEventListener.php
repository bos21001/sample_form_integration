<?php

namespace App\Containers\AppSection\SampleForm\Listeners;

use App\Containers\AppSection\SampleForm\Events\SampleFormsListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleFormsListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(SampleFormsListedEvent $event): void
    {
        //
    }
}
