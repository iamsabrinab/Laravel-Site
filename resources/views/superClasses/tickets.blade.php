@include('sharedCode.headTag')
@include('sharedCode.navigation')
<body>
    <div class="contact-clean" style="background-image:url(&quot;{!! asset('img/pexels-photo-160107.jpeg') !!}&quot;);background-repeat:no-repeat;background-size:cover;">
        @yield('section');
    </div>

</body>
@include('sharedCode.javaScript')
@include('sharedCode.modals')
@include('sharedCode.footer')

