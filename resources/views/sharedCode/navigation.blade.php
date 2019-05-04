<div>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark navigation-clean-button">
            <div class="container"><a class="navbar-brand text-white" href="{!! url('/') !!}">Laravel Sample.</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ action('NewController@home')}}">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ action('NewController@about')}}">About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ action('NewController@contacts')}}">Contacts</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="{{ action('NewController@allTickets')}}">All Tickets.</a><a class="dropdown-item" role="presentation" href="/about">Second Item</a><a class="dropdown-item" role="presentation" href="/contacts">Third Item</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="#" class="login" style = "color:white"data-toggle = "modal" data-target = "#login" >Log In</a><a class="btn btn-light action-button" data-toggle = "modal" data-target = "#signup" role="button" href="#">Sign Up</a></span></div>
    </div>
    </nav>
    </div>