<?php

namespace App\Domains\Features\Market\Listeners;

use App\Domains\Auth\Events\Account\MarketCreated;




class MarketEventListener {

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        activity('market')
            ->performedOn($event->market)
            ->withProperties([
                'market' => [
                    'name' => $event->user->type,
                    'owners_name' => $event->user->name,
                    'contact_email' => $event->user->email,
                ],
            ])
            ->log(':causer.name created market :subject.name');
    }


 /**
     * @param $event
     */
    public function onUpdated($event)
    {
        activity('market')
            ->performedOn($event->market)
            ->withProperties([
                'market' => [
                    'name' => $event->market->type,
                    'owners_name' => $event->market->name,
                    'contact_email' => $event->market->email,
                ],

            ])
            ->log(':causer.name updated market :subject.name');
    }


 /**
     * @param $event
     */
    public function onDeleted($event)
    {
        activity('market')
            ->performedOn($event->market)
            ->withProperties([
                'market' => [
                    'name' => $event->market->type,
                    'owners_name' => $event->market->name,
                    'contact_email' => $event->market->email,
                ],

            ])
            ->log(':causer.name deleted market :subject.name');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            MarketCreated::class,
            'App\Domains\Features\Market\Listeners\MarketEventListener@onCreated'
        );

        $events->listen(
            MarketUpdated::class,
            'App\Domains\Features\Market\Listeners\MarketEventListener@onUpdated'
        );

        $events->listen(
            MarketDeleted::class,
            'App\Domains\Features\Market\Listeners\MarketEventListener@onDeleted'
        );

    }

}
