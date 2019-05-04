@extends('superClasses.tickets')
@section('section')
<div class="container" id="container-panel" style = "max-width: 35%; margin-top:5%">
    <div class="card">
        <div class="card-header" style="background-color:#43c7f1;">
            <h5 class="text-center mb-0">Ticket Selected.</h5>
        </div>
        <div class="card-body">
            <h3 style="padding-left:10px;">Title :<span style="font-size:20px;padding-left:25%;">{!! $ticket-> title!!}</span></h3>
            <h3>Content :<span style="font-size:20px;padding-left:25%;">{!! $ticket-> content!!}</span></h3>
            <h3>Status:<span style="font-size:20px;">Title given.</span></h3>
            <p class="card-text"></p>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="btn-group" role="group"><a class="btn btn-success" role="button" href="{{ action('NewController@editTicket',$ticket->id)}}" style="font-size:22px;"><i class="fa fa-edit" style="font-size:22px;"></i><strong>Edit</strong></a><a class="btn btn-danger" role="button" href="#" style="font-size:22px;color:rgb(255,255,255);" data-target = "#delete" data-toggle = "modal"><i class="fa fa-trash"></i><strong>Delete</strong></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div role="dialog" tabindex="-1" class="modal fade" id = "delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal">Confirmation !!!!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>Are you sure you want to delete the ticket with the titile :<b> {!! $ticket-> title!!}</b></p>
                <div class="row">
                    <div class="col-3 offset-4"><a class="btn btn-success" role="button" href="{{ action('NewController@deleteTicket', $ticket->id)}}"><i class="fa fa-trash"></i><strong>Delete</strong></a></div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
@endsection
