<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Mail\ContactUs;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
            return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     public function emailSend(Request $request){

        $contact = Form::all();
        $contact = new Form;
        $contact->id = $request->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->text = $request->text;        
        
        $contact->save();

        $contact = $contact;
        $contact = array(
            'email' => $contact->email,
            'bcc' => 'steve@leblanccommunications.com',
            'first_name' => $contact->name,
            'phone' => $contact->phone,
            'text' => $contact->text,
            'from' => 'steve@leblanccommunications.com',
            'from_name' => 'Steve Leblanc'
            );


\Mail::send( 'emails.contactUsReply', $contact, function( $message ) use ($contact)
{
    $message->to( $contact['email'] )->to( $contact['bcc'] )->from( $contact['from'], $contact['from_name'] )->subject( 'Thank You' . ' ' . $contact['first_name'] );
    

});
session()->flash('message', 'Your Message Has Been Sent!');
return redirect('/');
        }



}