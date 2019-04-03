<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaginationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (isset($event->content['meta']['pagination'])){
            if (!array_key_exists('from', $event->content['meta']['pagination']))
            {
                $event->content['meta']['pagination']['from'] = (
                    ($event->content['meta']['pagination']['current_page'] - 1)
                    * $event->content['meta']['pagination']['per_page']
                ) + 1;
            }
        }


    }
}
