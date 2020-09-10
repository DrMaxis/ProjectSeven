@extends('frontend.auth.layouts.registerlayout')

@section('title', __('Register'))


@section('xcss')
<link rel="stylesheet" href="{{asset('css/uis/dashboard/components/cards/card.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('css/uis/dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('css/uis/dashboard/plugins/jquery-step/jquery.steps.css')}}">


<style>

#error-msg {
  color: red;
}
#valid-msg {
  color: #00C900;
}
input.error {
  border: 1px solid #FF7C7C;
}
.hide {
  display: none;
}

</style>

@endsection
@section('content')


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-content">

    <h1 class="">Register</h1>
    <p class="signup-link register">Already have an account? <a href="auth_login_boxed.html">Log in</a></p>


    <form method="post" action="{{route('frontend.auth.register')}}" class="text-left">
        @csrf
        <div class="form">
            <div id="name-field" class="field-wrapper input">
                <label for="name">NAME</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}"
                    placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name">
            </div>

            <div id="email-field" class="field-wrapper input">
                <label for="email">EMAIL</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-at-sign register">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                </svg>
                <input id="email" name="email" type="text"  class="form-control"
                    placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required
                    autocomplete="email">
            </div>

            <div id="phonenumber-field" class="field-wrapper input">


                <input id="phonenumber" name="phonenumber" type="tel" value="{{old('phonenumber')}}" class="form-control"
                    placeholder="{{ __('Phone Number') }}" maxlength="100" required autocomplete="tel">
                    <span id="valid-msg" class="hide">✓ Valid</span>
                    <span id="error-msg" class="hide"></span>
                    <input id="dialcode" type="hidden" name="dialcode">


            </div>

            <div id="password-field" class="field-wrapper input mb-2">
                <div class="d-flex justify-content-between">
                    <label for="password">PASSWORD</label>

                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input id="password" name="password" type="password" class="form-control"
                    placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    id="toggle-password" class="feather feather-eye">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>

            <div id="password-confirmation-field" class="field-wrapper input mb-2">
                <div class="d-flex justify-content-between">
                    <label for="password_confirmation">CONFIRM PASSWORD</label>

                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                    placeholder="{{ __('Password Confirmation') }}" maxlength="100" required
                    autocomplete="new-password">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    id="toggle-password-confirmation" class="feather feather-eye">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>
        </div>

        <div class="field-wrapper terms_condition">
            <div class="n-chk">
                <label class="new-control new-checkbox checkbox-primary">
                    <input type="checkbox" name="terms" value="1" id="terms"  class="new-control-input">
                    <span class="new-control-indicator"></span><span>I agree to the <a
                            href="{{ route('frontend.pages.terms') }}" target="_blank">@lang('Terms &
                            Conditions')</a></span>
                </label>
            </div>

        </div>

        @if(config('project.access.captcha.registration'))
        <div class="row">
            <div class="col">
                @captcha
                <input type="hidden" name="captcha_status" value="true" />
            </div>
            <!--col-->
        </div>
        <!--row-->
        @endif

        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper">
                <button id="submit_register" type="submit" class="btn btn-primary">Get Started!</button>
            </div>
        </div>

    </form>






</div>




@endsection

@section('xjs')

<script src="{{asset('js/extras/verification/intlTelInput/js/intlTelInput.js')}}"></script>

@include('frontend.auth.includes.verification.phoneverification')
@endsection
