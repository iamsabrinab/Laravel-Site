@extends('superClasses.tickets')
@section('section')
<form method="post" style="background-color:rgba(255,255,255,0.8);margin-top: 5%;">
<!-- Getting the errors of filling out the form. -->
@foreach($errors->all as $error)
<div role="alert" class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>{!! $error !!}</span></div>
@endforeach

<!-- Setting the confirmation information. -->

@if(session('status'))
                
                <div role="alert" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>{{ session('status') }}</span></div>
 @endif
    <h2 class="text-center">Edit the Ticket.</h2>
    <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}">
    <div class="form-group"><label style="color:rgb(0,0,0);"><strong>Title :</strong></label><input type="text" name="title" value= "{{$tickets->title}}" class="form-control" /></div>
    <div class="form-group"><label style="color:rgb(0,0,0);"><strong>Content :</strong></label><textarea rows="14" name="message"  class="form-control" style="color:rgb(0,0,0);">{{$tickets->content}}</textarea></div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-6 offset-3"><button class="btn btn-warning btn-block" type="submit" style="background-color:#f5d21d;">Edit Ticket.</button></div>
        </div>
    </div>
</form>
@endsection