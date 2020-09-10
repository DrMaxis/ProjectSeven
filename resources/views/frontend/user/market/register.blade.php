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
  color: #009688;
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

    <h1 class="">Setup Your New Market</h1>
    <p class="signup-link register">Start your free store with up to 15 products and limited features. Upgrade anytime!</p>


    <form method="post" action="{{route('frontend.user.market.register.post')}}" class="text-left">
        @csrf
        <div class="form">
            <div id="name-field" class="field-wrapper input">
                <label for="name">MARKET NAME</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="market_name" name="name" type="text" class="form-control" value="{{ old('market_name') }}"
                    placeholder="{{ __('Market Name') }}" maxlength="100" required autofocus autocomplete="market_name">
                    <div class="valid-feedback market-name">
                        ✓ Valid Market Name!
                    </div>
                    <div class="invalid-feedback market-name">
                        ✘ There is already a market with this name.
                    </div>
            </div>

            <div id="email-field" class="field-wrapper input">
                <label for="email">BUSINESS EMAIL</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-at-sign register">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                </svg>
                <input id="business_email" name="business_email" type="text"  class="form-control"
                    placeholder="{{ __('Business E-mail Address') }}" value="{{ old('business_email') }}" maxlength="255" required
                    autocomplete="business_email">

                    <div class="valid-feedback email">
                        ✓ Accepted Email Address
                    </div>
                    <div class="invalid-feedback email">
                        ✘ There is already a market associated with this email.
                    </div>
            </div>

            <div id="phonenumber-field" class="field-wrapper input">
                <input id="business_phonenumber" name="business_phonenumber" type="tel" value="{{old('business_phonenumber')}}" class="form-control"
                    placeholder="{{ __('Business Phone #') }}" maxlength="100" required autocomplete="tel">
                    <span id="valid-msg" class="hide">✓ Valid</span>
                    <span id="error-msg" class="hide"></span>
                    <input id="dialcode" type="hidden" name="dialcode">
            </div>


            <div id="name-field" class="field-wrapper input">
                <label for="name">YOUR MARKET URL</label>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="url" name="url" type="text" class="form-control"
                    placeholder="{{ __('Market URL') }}" maxlength="100" required autofocus autocomplete="url" readonly>
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

@include('frontend.user.market.includes.verification.phoneverification')

@include('frontend.user.market.includes.verification.marketexists')
<script>

   (function () {
        var baseUrl = "{{get_base_url()}}";
        var input = document.querySelector('#market_name');
        var resultInput = $('#url');
 input.addEventListener('keydown',function(e) {
                    if(input.value.length === 0 && e.which === 32) {
                    e.preventDefault();
                }
                });

        var setUrl = function() {
            if(input.value) {

               var  $result= input.value.toLowerCase().replace(/ /g,'-').replace(/[-]+/g, '-').replace(/[^\w-]+/g,'');
                 resultInput.val(baseUrl+'/'+$result);
            }
        }
        input.addEventListener('blur', function() {
            setUrl();
        });
input.addEventListener('change', setUrl);
input.addEventListener('keyup', setUrl);

   })();




</script>




@endsection
