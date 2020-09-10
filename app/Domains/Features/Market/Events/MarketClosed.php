<?php

namespace App\Domains\Auth\Events\Account;

use App\Domains\Features\Market\Models\Market;
use Illuminate\Queue\SerializesModels;

/**
 * Class MarketClosed.
 */
class MarketClosed
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
