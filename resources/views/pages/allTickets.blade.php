@extends('superClasses.tickets')
 @section('section')
 <div class="container" style="margin-top:5%;">
    <h1 class="text-center" style="color:rgba(255,255,255,0.9);">Tickets Table.</h1>
    @if(session('statu'))           
                <div role="alert" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>{{ session('statu') }}</span></div>
      @endif
    <div class="table-responsive" style="background-color:#ffffff;">
    <table class="table table-striped table-bordered table-hover">
        <caption>{{ session('statu') }}</caption>
        <thead>
            <tr>
                <th><strong>ID.</strong><br /></th>
                <th><strong>ID.</strong><br /></th>
                <th><strong>Status</strong><br /></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->id}}</td>
                <td> <a href = "{{ action('NewController@singleTicket', $ticket->id)}}">{{ $ticket-> title}}</td>
                <td>{{ $ticket-> status? 'Pending':'Answered'}}</td>
                </tr>
                @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <td><strong>ID.</strong><br /></td>
                <td><strong>Title</strong><br /></td>
                <td><strong>Status</strong><br /></td>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
@endsection