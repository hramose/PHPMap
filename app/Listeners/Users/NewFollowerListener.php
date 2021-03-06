<?php

namespace App\Listeners\Users;

use App\Events\Users\NewFollower;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\Users\UserFollowed;

class NewFollowerListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param NewFollower $event
     */
    public function handle(NewFollower $event)
    {
        auth()->user()->notify(new UserFollowed($event->user));
    }
}
