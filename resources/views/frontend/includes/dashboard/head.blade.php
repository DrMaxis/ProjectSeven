<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'DrMaxis')">
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--  BEGIN GLOBAL MANDATORY STYLES --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/uis/dashboard/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/uis/dashboard/plugins.css')}}"/>
    {{--  END GLOBAL MANDATORY STYLES --}}

    @stack('after-styles')

    @yield('xcss')

    @include('includes.partials.ga')
</head>
