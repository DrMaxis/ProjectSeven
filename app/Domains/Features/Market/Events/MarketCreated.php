<?php

namespace App\Domains\Features\Market\Events;

use App\Domains\Features\Market\Models\Market;
use Illuminate\Queue\SerializesModels;

/**
 * Class MarketCreated.
 */
class MarketCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $market;

    /**
     * @param $user
     */
    public function __construct(Market $market)
    {
        $this->market = $market;
    }
}
