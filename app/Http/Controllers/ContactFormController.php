<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactFormController extends Controller
{
    public function create(){
        return view('welcome');
    }

    public function store(){
       

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        //send an email
        Mail::to('scott_kelly@metaa.co.uk')->send(new ContactFormMail($data));

        return redirect('/')-> with ('success', 'Message sent!');
    }
}
