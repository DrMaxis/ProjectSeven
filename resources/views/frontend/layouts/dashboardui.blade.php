<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

@include('frontend.includes.dashboard.head')

<body class="">
    @include('frontend.includes.dashboard.loader')

    @include('frontend.includes.dashboard.nav')
    @include('frontend.includes.dashboard.subheader')

  {{--   @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements') --}}

    <div class="main-container" id="container">

        @include('frontend.includes.dashboard.overlays')

        @include('frontend.includes.dashboard.sidebar')


        <div id="content" class="main-content">




                    @yield('content')



        </div>



    </div>
    <!--app-->

    @stack('before-scripts')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('js/uis/dashboard/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/uis/dashboard/vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('js/uis/dashboard/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/uis/dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/uis/dashboard/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('js/uis/dashboard/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    @stack('after-scripts')


    @yield('xjs')


</body>

</html>
