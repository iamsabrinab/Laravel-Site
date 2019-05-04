<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Http\Requests\VerifyEdit;
use App\Ticket;
class NewController extends Controller

{
    public function deleteTicket($id){ 
        $ticket = Ticket::whereId($id)->firstOrFail();
        
        $ticket->delete();
        $tickets = Ticket::all();
        return view('pages.allTickets') -> with('tickets',$tickets);
    }
    public function home(){
       return view('pages.index'); 
    }
    public function allTickets(){
        $tickets = Ticket::all();
        return view('pages.allTickets') -> with('tickets',$tickets);
    }
    public function about(){
        return view('pages.about');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function store(TicketFormRequest $request){
         //return $request-> all();
         $slug = uniqid();
         $ticket = new Ticket(array( 'title' => $request->get('name'),
                                     'content'=> $request->get('message'),
                                     'slugs'=> $slug
        ));

        $ticket->save();
        return redirect('contacts')-> with('status','You have successfuly submitted your concerns.');
    }

    public function singleTicket($id){
        $ticket = Ticket::whereId($id)->firstOrFail();
         return view('pages.singleTicket')-> with('ticket', $ticket);
    }

    // function to load the edit pages.

    public function editTicket($id){
        $ticket = Ticket::whereId($id)->firstOrFail();
        return view('pages.editTicket')-> with('tickets',$ticket);
    }

    public function showEdit($id, VerifyEdit $edit){
       
        //return $edit->all();

        $ticket = Ticket::whereId($id)->firstOrFail();
        $ticket->title = $edit->get('title');
        $ticket->content = $edit->get('message');
        $ticket->save();

        return redirect(action('NewController@showEdit',$ticket->id))->with('status','The data has been updated.');

    }
}
