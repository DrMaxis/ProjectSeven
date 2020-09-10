@extends('frontend.layouts.dashboardui')

@section('title', __('Dashboard'))


@section('meta')

@endsection


@section('xcss')

{{--  BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES --}}

<link rel="stylesheet" type="text/css" href="{{asset('css/uis/dashboard/apex/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/uis/dashboard/dash_2.css')}}" />
<link rel="stylesheet" href="{{asset('css/uis/dashboard/components/cards/card.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('css/uis/dashboard/plugins/bootstrap-select/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('css/uis/dashboard/plugins/jquery-step/jquery.steps.css')}}">





{{--  END PAGE LEVEL PLUGINS/CUSTOM STYLES --}}


<style>
    .payment_method_select {
        border: 1px solid #009688;
        margin-top: 1rem;
    }


    .hidden {
        display: none;
    }





/*----- POSITIONING -----*/
.card-form-container {
  display: -webkit-box;
  display: flex;
  width: 80%;
  margin: 0 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: center;
          justify-content: center;
  height: 100%;
  -webkit-perspective: 100;
          perspective: 100;
  position: relative;
}
@media (max-width: 467px) {
  .card-form-container {
    width: 90%;
  }
}

#cardForm {
  height: 5em;
  width: 100%;
  height: 5.5em;
  margin-bottom: 1em;
  position: relative;
  -webkit-transform: translateX(0em);
          transform: translateX(0em);
}

/*----- HF CONTAINERS -----*/
.field-container {
  position: absolute;
  width: 100%;
  border: 1px solid #fff;
  z-index: 2;
  opacity: 1;
  -webkit-transition: all 500ms cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: all 500ms cubic-bezier(0.2, 1.3, 0.7, 1);
  -webkit-backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform-origin: bottom;
          transform-origin: bottom;
  -webkit-transition: opacity 0.5s, -webkit-transform 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: opacity 0.5s, -webkit-transform 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.5s cubic-bezier(0.2, 1.3, 0.7, 1), opacity 0.5s;
  transition: transform 0.5s cubic-bezier(0.2, 1.3, 0.7, 1), opacity 0.5s, -webkit-transform 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
  opacity: 1;
}

.field-container:nth-child(1) {
  -webkit-animation: inputIntro 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
          animation: inputIntro 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
}

.field-container--hidden {
  opacity: 0;
  -webkit-transform: translate(0em, 0em) rotateX(180deg);
          transform: translate(0em, 0em) rotateX(180deg);
  z-index: -1;
}

.field-container--button {
  border: 0;
}

.hosted-field {
  height: 5.5em;
  width: 100%;
  display: block;
  padding-left: 1em;
}

/*----- HF LABELS -----*/
.hosted-field--label {
  color: #FFF;
  position: absolute;
  top: 0.9em;
  left: 0.5em;
  -webkit-transition: color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), color 0.2s;
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  font-size: 2em;
  line-height: 1;
}

.hosted-field--label--moved,
.not-empty {
  -webkit-transform: scale(0.8) translate(0em, -3em);
          transform: scale(0.8) translate(0em, -3em);
  -webkit-transition: color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), color 0.2s;
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), color 0.2s, -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  color: #fff;
}

/*----- HF MESSAGES -----*/
.field-message {
  font-size: 1em;
  margin: 1em;
  opacity: .3;
}
@media (max-width: 467px) {
  .field-message {
    margin: 0;
  }
}

.field-message--error {
  color: #f44336;
}

/*----- HF SUBMIT -----*/
#button-pay {
  -webkit-appearance: none;
  width: 100%;
  border: 0;
  text-align: center;
  font-size: 2em;
  padding: 0.9em;
  color: #000;
  background: #fff;
  cursor: pointer;
}

/*----- HF CONTROLS -----*/
.form-controls__steps {
  font-size: 1.5em;
  position: absolute;
  right: 1em;
  -webkit-transform: translateY(-1.9em);
          transform: translateY(-1.9em);
  opacity: .3;
}

.form-controls {
  position: absolute;
  right: 0;
  z-index: 5;
  -webkit-animation: arrowIntroScale 0.3s 0.4s cubic-bezier(0.2, 1.3, 0.7, 1) backwards;
          animation: arrowIntroScale 0.3s 0.4s cubic-bezier(0.2, 1.3, 0.7, 1) backwards;
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
}
@media (max-width: 467px) {
  .form-controls {
    right: 0.5em;
  }
}
.form-controls a {
  display: inline-block;
  padding: 1em 0.5em;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
}
@media (max-width: 467px) {
  .form-controls a {
    padding: 0.7em 0.1em;
    -webkit-transform: scale(0.6);
            transform: scale(0.6);
  }
}
.form-controls a:hover {
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
  -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.1s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.1s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.1s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.1s cubic-bezier(0.2, 1.3, 0.7, 1);
}
.form-controls .form-controls--hidden {
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.3s cubic-bezier(0.2, 1.3, 0.7, 1);
}
.form-controls .form-controls--hidden:hover {
  -webkit-transform: scale(0);
          transform: scale(0);
}

.form-controls--back {
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  -webkit-transform: translateX(2em);
          transform: translateX(2em);
}

.form-controls--end {
  -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  transition: transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1), -webkit-transform 0.2s cubic-bezier(0.2, 1.3, 0.7, 1);
  -webkit-transform: translateY(-5em) translateX(-3.5em);
          transform: translateY(-5em) translateX(-3.5em);
}

/*----- BT CLASSES -----*/
.braintree-hosted-fields-valid {
  background: rgba(76, 175, 80, 0.5);
  -webkit-animation: success 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
          animation: success 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
}

.braintree-hosted-fields-invalid {
  background: rgba(244, 67, 54, 0.5);
  color: #fff;
  -webkit-animation: error 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
          animation: error 0.5s cubic-bezier(0.2, 1.3, 0.7, 1);
}

/*----- ANIMATIONS -----*/
@-webkit-keyframes inputIntro {
  0% {
    -webkit-transform: translate(0, 0.2em) rotateX(90deg) scale(0.9);
            transform: translate(0, 0.2em) rotateX(90deg) scale(0.9);
  }
  100% {
    -webkit-transform: translate(0, 0) rotateX(0) scale(1);
            transform: translate(0, 0) rotateX(0) scale(1);
  }
}
@keyframes inputIntro {
  0% {
    -webkit-transform: translate(0, 0.2em) rotateX(90deg) scale(0.9);
            transform: translate(0, 0.2em) rotateX(90deg) scale(0.9);
  }
  100% {
    -webkit-transform: translate(0, 0) rotateX(0) scale(1);
            transform: translate(0, 0) rotateX(0) scale(1);
  }
}
@-webkit-keyframes arrowIntroScale {
  0% {
    -webkit-transform: translate(-1em, 0) scale(0);
            transform: translate(-1em, 0) scale(0);
  }
  100% {
    -webkit-transform: translate(0, 0) scale(1);
            transform: translate(0, 0) scale(1);
  }
}
@keyframes arrowIntroScale {
  0% {
    -webkit-transform: translate(-1em, 0) scale(0);
            transform: translate(-1em, 0) scale(0);
  }
  100% {
    -webkit-transform: translate(0, 0) scale(1);
            transform: translate(0, 0) scale(1);
  }
}
@-webkit-keyframes error {
  0% {
    background: #282828;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background: #f44336;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    background: rgba(244, 67, 54, 0.5);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes error {
  0% {
    background: #282828;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background: #f44336;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    background: rgba(244, 67, 54, 0.5);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes success {
  0% {
    background: #282828;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background: #3d8b40;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    background: rgba(76, 175, 80, 0.5);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes success {
  0% {
    background: #282828;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    background: #3d8b40;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    background: rgba(76, 175, 80, 0.5);
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

</style>



@endsection



@section('content')

<div class="page-header">
    <div class="page-title">
        <h3>Money Transfers</h3>
    </div>
</div>

<div class="layout-px-spacing">


    <div class="row layout-top-spacing">




        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Card 7</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="card component-card_7" style="background-color:transparent;">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Launch modal
                            </button>
                            <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Send or Recieve Money</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">
                                                        <div id="example-vertical">
                                                            <h3>Sending Amount</h3>
                                                            <section>
                                                                <p>Enter the amount and currency.</p>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-4">
                                                                            <select class="selectpicker"
                                                                                data-live-search="true">
                                                                                <option
                                                                                    value="{{$logged_in_user->account->default_currency}}">
                                                                                    {{$logged_in_user->account->default_currency}}
                                                                                </option>
                                                                                @foreach($currencies as $currency)
                                                                                @if($currency ==
                                                                                $logged_in_user->account->default_currency)
                                                                                @else
                                                                                <option value="{{$currency->code}}">
                                                                                    {{$currency->code}}</option>
                                                                                @endif

                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class=" mb-4">
                                                                            <input type="text" class="form-control mb-4"
                                                                                id="currency" placeholder="0.00">
                                                                        </div>
                                                                    </div>



                                                                </div>




                                                            </section>
                                                            <h3>Recipient</h3>
                                                            <section>
                                                                <p>Enter the Recipient's name and either a phone number
                                                                    or email.</p>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="input-group mb-4">

                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" aria-label="Name"
                                                                                name="name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-group mb-4">

                                                                            <input type="email" class="form-control"
                                                                                placeholder="Email" aria-label="Email"
                                                                                name="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="input-group mb-4">

                                                                            <input type="email" class="form-control"
                                                                                placeholder="Phone Number"
                                                                                aria-label="Phone Number"
                                                                                name="phonenumber">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>

                                                            <h3>Payment Method</h3>
                                                            <section>
                                                                <p>Choose an accepted payment method.</p>


                                                                <div id="payment_forms" class="row payment-method-forms hidden">
                                                                             {{-- Debit/Credit Hosted Form --}}
                                                                        <div id="card-form" class="col-md-12 credit_form hidden">

                                                                            <div class="card-form-container">
                                                                                <div class="card-form-container-wrap per">

                                                                                  <div class="form-controls__steps">1/4</div>

                                                                                  <nav class="form-controls">
                                                                                    <a href="#" class="form-controls__prev form-controls--hidden">
                                                                                      <svg width="19" height="32" viewBox="0 0 19 32" xmlns="http://www.w3.org/2000/svg"><title>next</title><path fill="#ffffff" d="M5.657 15.556L18.385 2.828 15.555 0 0 15.556l15.556 15.557 2.83-2.83" fill-rule="evenodd"/></svg>
                                                                                    </a>
                                                                                    <a href="#" class="form-controls__next form-controls--hidden">
                                                                                      <svg width="19" height="32" viewBox="0 0 19 32" xmlns="http://www.w3.org/2000/svg"><title>prev</title><path fill="#ffffff" d="M12.727 15.556L0 2.828 2.828 0l15.557 15.556L2.828 31.113 0 28.283" fill-rule="evenodd"/></svg>
                                                                                    </a>
                                                                                  </nav>

                                                                                  <form  method="post" id="cardForm">
                                                                                    <div class="field-container">
                                                                                      <label class="hosted-field--label " for="card-number">Card Number
                                                                                      </label>
                                                                                      <div class="hosted-field" id="card-number"></div>
                                                                                    </div>

                                                                                    <div class="field-container field-container--hidden">
                                                                                      <label class="hosted-field--label " for="expiration-date">
                                                                                        Exp (MM/YY)
                                                                                      </label>
                                                                                      <div class="hosted-field" id="expiration-date"></div>
                                                                                    </div>

                                                                                    <div class="field-container field-container--hidden">
                                                                                      <label class="hosted-field--label " for="cvv">
                                                                                      CVV
                                                                                    </label>
                                                                                      <div class="hosted-field" id="cvv"></div>
                                                                                    </div>

                                                                                    <div class="field-container field-container--hidden field-container--button">
                                                                                      <input id="button-pay" type="submit" value="Pay" />
                                                                                    </div>
                                                                                  </form>

                                                                                  <div class="form-info">
                                                                                    <p class="field-message">Let's add your card number.</p>
                                                                                  </div>

                                                                                </div>
                                                                              </div>
                                                                        </div>
                                                                </div>
                                                                <div id="payment_methods" class="row payment-methods-container">


                                                                        {{--  Debit/Credit Select --}}
                                                                        <div id="card-payment" class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text credit_card_method">Debit / Credit</h5>
                                                                                </div>
                                                                            </div>



                                                                        </div>




                                                                        <div class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text">Android Pay
                                                                                    </h5>


                                                                                </div>
                                                                            </div>



                                                                        </div>


                                                                        <div class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text">Apple Pay</h5>


                                                                                </div>
                                                                            </div>



                                                                        </div>


                                                                        <div class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text">Google Pay
                                                                                    </h5>


                                                                                </div>
                                                                            </div>



                                                                        </div>



                                                                        <div class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text">Paypal</h5>


                                                                                </div>
                                                                            </div>



                                                                        </div>


                                                                        <div class="col-md-4">


                                                                            <div class="card payment_method_select">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-text">Another Way To
                                                                                        Pay</h5>


                                                                                </div>
                                                                            </div>



                                                                        </div>

                                                                </div>
                                                            </section>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--    <form method="post" id="payment-form" action="">
                                                                            @csrf
                                                                            <section>
                                                                                <div class="bt-drop-in-wrapper">
                                                                                    <div id="bt-dropin"></div>
                                                                                </div>
                                                                            </section>

                                                                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                                                                            <button class="button" type="submit"><span>Test Transaction</span></button>
                                                                        </form> --}}

    </div>

</div>










@endsection




@section('xjs')

<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/web/3.64.2/js/client.min.js"></script>

<!-- Load Hosted Fields component. -->
<script src="https://js.braintreegateway.com/web/3.64.2/js/hosted-fields.min.js"></script>


<script>

$(document).ready(function() {
var form = document.querySelector('#cardForm');

// Input switcher
var formItems = [];
var currentFormItem = 0;

$('.field-container').each(function() {
  formItems.push(this);
})

// Add the functionality for what happens when people will click on next
function formControlNext() {
  $(formItems[currentFormItem]).addClass('field-container--hidden');
  $(formItems[currentFormItem + 1]).removeClass('field-container--hidden');

  currentFormItem = currentFormItem + 1;
  checkFormVisibility();
  changeStepperNumber();

  hideNext();

  return false;
}

function hideNext() {
  if (!$(formItems[currentFormItem + 1]).find('.hosted-field').hasClass('hosted-field')) {
    $('.form-controls__next').addClass('form-controls--hidden');
  }

  $('.form-controls__prev').addClass('form-controls--back');
}

function formControlPrev() {
  $(formItems[currentFormItem]).addClass('field-container--hidden');
  $(formItems[currentFormItem - 1]).removeClass('field-container--hidden');

  currentFormItem = currentFormItem - 1;
  checkFormVisibility();
  changeStepperNumber();
}

function showNext() {
  $('.form-controls__next').removeClass('form-controls--hidden');
  $('.form-controls__prev').removeClass('form-controls--back');
}


   $('.form-controls__next').click(function() {
  formControlNext();

  return false;
})


$('.form-controls__prev').click(function() {
  formControlPrev();

  return false;
})

// Update the number of steps and update the content to match input
function changeStepperNumber() {
  if (currentFormItem === 3) {
    $('.form-controls__steps').text('4 / 4');
    $('.field-message').text('Time to buy that sweet sweet bag.');
    $('.form-controls').addClass('form-controls--end');
  } else if (currentFormItem === 2) {
    $('.form-controls__steps').text('3 / 4');
    $('.field-message').text('This is on the back of your card.');
    $('.form-controls').removeClass('form-controls--end');
  } else if (currentFormItem === 1) {
    $('.form-controls__steps').text('2 / 4');
    $('.field-message').text('When will your card expire?');
  } else {
    $('.form-controls__steps').text('1 / 4');
    $('.field-message').text('Let\'s add your card number.');
  }
}

// Show/hide the appropriate controls
function checkFormVisibility() {
  if (currentFormItem === 0) {
    $('.form-controls__prev').addClass('form-controls--hidden');
  } else {
    $('.form-controls__prev').removeClass('form-controls--hidden');
  }

  if (currentFormItem === 3) {
    $('.form-controls__next').addClass('form-controls--hidden');
  } else {
    $('.form-controls__next').removeClass('form-controls--hidden');
  }
}

// Create Braintree components
braintree.client.create({
  authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b'
}, function(err, client) {
  if (err) {
    console.error(err);
    return;
  }

  braintree.hostedFields.create({
    client: client,
    styles: {
      'input': {
        'font-size': '2em',
        'font-weight': '300',
        'font-family': 'sans-serif',
        'color': '#fff'
      },
      ':focus': {
        'color': '#fff'
      },
      '.invalid': {
        'color': '#fff'
      },
      '@media screen and (max-width: 361px)': {
        'input': {
          'font-size': '1em'
        }
      }
    },
    fields: {
      number: {
        selector: '#card-number'
      },
      cvv: {
        selector: '#cvv'
      },
      expirationDate: {
        selector: '#expiration-date'
      }
    }
  }, function(err, hostedFields) {
    if (err) {
      console.error(err);
      return;
    }

    hostedFields.on('validityChange', function(event) {
      var field = event.fields[event.emittedBy];

      if (field.isValid) {
        // Show Next button if inputs are valid
        showNext();

        // Update message to reflect success
        $('.field-message').text('Nice! Let\'s move on…');
      } else if (!field.isPotentiallyValid) {
        // Hide next button
        $('.form-controls__next').addClass('form-controls--hidden');
        // Change the top message based on the input error
        switch ($(field.container).attr('id')) {
          case 'card-number':
            $('.field-message').text('Please check if you typed the correct card number.');
            break;
          case 'expiration-date':
            $('.field-message').text('Please check your expiration date.');
            break;
          case 'cvv':
            $('.field-message').text('Please check your security code.');
            break;
        }
      } else {
        switch ($(field.container).attr('id')) {
          case 'card-number':
            $('.field-message').text('Let\'s add your card number.');
            break;
          case 'expiration-date':
            $('.field-message').text('When will your card expire?');
            break;
          case 'cvv':
            $('.field-message').text('This is on the back of your card.');
            break;
        }
      }
    });

    hostedFields.on('focus', function(event) {
      var field = event.fields[event.emittedBy];

      $(field.container).prev('.hosted-field--label').addClass('hosted-field--label--moved');
      $(field.container).parent().addClass('field-container--active');
    });

    hostedFields.on('blur', function(event) {
      var field = event.fields[event.emittedBy];

      $(field.container).prev('.hosted-field--label').removeClass('hosted-field--label--moved');
      $(field.container).parent().removeClass('field-container--active');
    });

    hostedFields.on('empty', function(event) {
      var field = event.fields[event.emittedBy];

      $(field.container).prev('.hosted-field--label').removeClass('not-empty');
    });

    hostedFields.on('notEmpty', function(event) {
      var field = event.fields[event.emittedBy];

      $(field.container).prev('.hosted-field--label').addClass('not-empty');
    });

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      hostedFields.tokenize(function(err, payload) {
        if (err) {
          console.error(err);
          return;
        }

        // This is where you would submit payload.nonce to your server
        alert('Submit your nonce to your server here!');
      });
    });
  });
});

});


</script>
<script>





$(document).ready(function() {
    var paymentMethodContainer = $('#payment_methods');
    var paymentMethodForms = $('#payment_forms');
    $('#card-payment').on('click', function(e) {
    console.log(e, 'clicked');

    paymentMethodContainer.addClass('hidden');
    paymentMethodForms.removeClass('hidden');
    $('#card-form').removeClass('hidden');
});

 });

</script>




{{-- <script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{$token}}";
    braintree.dropin.create({
      authorization: client_token,
      selector: '#bt-dropin',
      paypal: {
        flow: 'vault'
      }
    }, function (createErr, instance) {
      if (createErr) {
        console.log('Create Error', createErr);
        return;
      }
      form.addEventListener('submit', function (event) {
        event.preventDefault();
        instance.requestPaymentMethod(function (err, payload) {
          if (err) {
            console.log('Request Payment Method Error', err);
            return;
          }
          // Add the nonce to the form and submit
          document.querySelector('#nonce').value = payload.nonce;
          form.submit();
        });
      });
    });
</script> --}}


<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('js/uis/dashboard/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('js/uis/dashboard/dash_2.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/jquery-step/jquery.steps.min.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/jquery-step/custom-jquery.steps.js')}}"></script>
<script src="{{asset('js/uis/dashboard/scrollspyNav.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{asset('js/uis/dashboard/plugins/input-mask/input-mask.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->




@endsection
