<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
//        $validation = $req->validate([
//            'subject' =>'required|min:5|max:18',
//            'name' => 'required'
//        ]);

        //$contact = new ContactModel();
        $name = $request->input('name');
        //$email = $request->input('email');
        //$subject = $request->input('subject');
        $message =  $request->input('message');
        //$email = Auth::check() ? Auth::user()->email : $contact->email;
        $email = $request->input('email');
        Mail::to($email)->send(new SendMail($name,$email,$message));
        //dd($email);
       // $contact->name = $req->input('name');
       // $contact->email = $req->input('email');
       // $contact->subject = $req->input('subject');
       // $contact->message = $req->input('message');

       // $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }
}
