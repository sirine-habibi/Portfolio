<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function  __invoke(ContactRequest $request)
    {
        Mail::to("habibi02sirine@gmail.com")->send(new ContactMail($request->name, $request->email, $request->body));
        return response()->json("success");
    }
}
