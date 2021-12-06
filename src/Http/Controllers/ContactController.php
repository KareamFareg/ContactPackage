<?php

namespace Kaream\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kaream\Contact\Mail\ContactMailable;
use Kaream\Contact\Models\Contact;

class ContactController extends Controller
{
   public function index(){
       return view('contact::contact');
   }
   public function save(Request $request){
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name,$request->message));
       Contact::create($request->all());
       return redirect(route('contact'));
   }
}
