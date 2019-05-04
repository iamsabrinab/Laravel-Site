@extends('superClasses.tickets');
@section('section')
        <form method="post" style="background-color:rgba(255,255,255,0.6);margin-top: 5%;">
            @foreach($errors-> all() as $error) 
               <div role="alert" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>{!! $error !!}</span></div>
            @endforeach
           @if(session('status'))
                
                <div role="alert" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>{{ session('status') }}</span></div>
           @endif

            <h2 class="text-center" style="color:rgb(0,0,0);">Contact us</h2>
            <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}">
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control " type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-success btn-block" type="submit" style="color:rgb(249,249,249);background-color:#23aa49;">send </button></div>
        </form>
    @endsection

