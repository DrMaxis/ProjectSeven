@if(config('project.google_analytics') && config('project.google_analytics') !== 'UA-XXXXX-X')
    {{-- Google Analytics: change UA-XXXXX-X to be your site's ID. --}}
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','{{ config('project.google_analytics') }}','auto');ga('send','pageview');
    </script>
@endif