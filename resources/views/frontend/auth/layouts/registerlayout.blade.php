<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

@include('frontend.auth.includes.register.head')

<body class="form">

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>





    <!--app-->

    @stack('before-scripts')

     <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
     <script src="{{asset('js/uis/dashboard/libs/jquery-3.1.1.min.js')}}"></script>
     <script src="{{asset('js/uis/dashboard/vendor/bootstrap/popper.min.js')}}"></script>
     <script src="{{asset('js/uis/dashboard/vendor/bootstrap/bootstrap.min.js')}}"></script>

     <!-- END GLOBAL MANDATORY SCRIPTS -->
     <script src="{{asset('js/extras/auth/form.js')}}"></script>



    @stack('after-scripts')


    @yield('xjs')


</body>

</html>
