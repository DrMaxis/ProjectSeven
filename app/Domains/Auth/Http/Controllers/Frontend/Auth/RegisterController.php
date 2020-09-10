<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Domains\Auth\Services\UserService;
use App\Domains\Auth\Services\AccountService;
use Illuminate\Foundation\Auth\RegistersUsers;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * @var UserService
     */
    protected $userService;

     /**
     * @var AccountService
     */
    protected $accountService;


    /**
     * RegisterController constructor.
     *
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService, AccountService $accountService)
    {
        $this->userService = $userService;
        $this->accountService = $accountService;
    }

    /**
     * Where to redirect users after registration.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(homeRoute());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        abort_unless(config('project.access.user.registration'), 404);

        return view('frontend.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => array_merge(['max:100'], PasswordRules::register($data['email'] ?? null)),
            'terms' => ['required', 'in:1'],
            'phonenumber' => ['required', Rule::unique('users')],
            'dialcode' => ['required'],
            'g-recaptcha-response' => ['required_if:captcha_status,true', 'captcha'],
        ], [
            'terms.required' => __('You must accept the Terms & Conditions.'),
            'g-recaptcha-response.required_if' => __('validation.required', ['attribute' => 'captcha']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     *
     * @return \App\Domains\Auth\Models\User|mixed
     * @throws \App\Domains\Auth\Exceptions\RegisterException
     */
    protected function create(array $data)
    {

        abort_unless(config('project.access.user.registration'), 404);

               $user = $this->userService->registerUser($data);

               $userData = [
                   'user_uuid' => $user->uuid,
                   'owner' => $user->name,
                   'base_country' => getPhoneLocationData($user->phonenumber)['country_code_iso3'],
                   'default_currency' => getDefaultCurrency(getPhoneLocationData($user->phonenumber)['country_code_iso3']),
                   'account_balance' => 0.00,
                   'account_email' => $user->email,
                   'account_phone' => $user->phonenumber,
                   'account_phone_network' => getPhoneLocationData($user->phonenumber)['carrier'],
               ];
               $this->accountService->registerAccount($userData);
        return $user;
    }
}

