<?php

namespace App\Domains\Features\Market\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\Auth\SocialiteHelper;
use App\Domains\Features\Market\Models\Market;
use App\Domains\Features\Market\Services\MarketService;
use App\Domains\Features\Market\Http\Requests\CreateMarketRequest;
use App\Domains\Features\Market\Http\Requests\CheckMarketNameRequest;
use App\Domains\Features\Market\Http\Requests\CheckMarketEmailRequest;





/**
 * Class MarketController.
 */
class MarketController extends Controller
{


    /**
     * @var MarketService
     */
    protected $marketService;


    /**
     * MarketController constructor.
     *
     * @param MarketService $marketService
     */
    public function __construct(MarketService $marketService)
    {
        $this->marketService = $marketService;
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


        if (auth()->user()->account->market === null) {

          return $this->registerNewMarket();
        } else {
            $market = auth()->user()->account->market;
        }

        return view('frontend.user.market.index')->with('market', $market);
    }


    /**
     * @return \Illuminate\View\View
     */
    public function register(CreateMarketRequest $request)
    {
        $data = $request->only('name', 'business_email', 'business_phonenumber', 'dialcode');

        $market = $this->marketService->store($data);

        dd($request, $data, $market);
        if ($market) {
            //return response()->json('Market Created');

           return view('frontend.user.market.profile');
        }


    }

    public function validateName(CheckMarketNameRequest $request) {
        $name = $request->name;

        $market = Market::where('name','=', $name)->first();
        if($market == null) {
            return response()->json('null');
        } else {
            return response()->json('exists');
        }

    }

    public function validateEmail(CheckMarketEmailRequest $request) {
        $email = $request->email;

        $market = Market::where('business_email','=', $email)->first();
        if($market == null) {
            return response()->json('null');
        } else {
            return response()->json('exists');
        }

    }



    public function profile(Market $market)
    {

        $market = auth()->user()->account->market;

        return view('frontend.user.market.profile')->with('market', $market);
    }

   /*  public function orders() {
        $market = auth()->user()->account->market;
        return view('frontend.user.market.orders')->with('market', $market);
    } */

    /**
     * @return \Illuminate\View\View
     */
    public function registerNewMarket()
    {
        return view('frontend.user.market.register');
    }
}
