<!DOCTYPE html>
<html>
<body>
    @include('sharedCode.navigation');
    @include('sharedCode.headTag');
    <div style="background-image:url(&quot;{!! asset('img/pexels-photo-160107.jpeg') !!}&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;margin-top:40px;">
        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container">
                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;"> @yield('pageName')</h1>
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">@yield('pageDocumentation')</h3>
                </div>
            </div>
        </div>
    </div>
    <script src="{!! asset('js2/jquery.min.js') !!}"></script>
    <script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
    @include('sharedCode.modals')
    @include('sharedCode.footer')
</body>

</html>