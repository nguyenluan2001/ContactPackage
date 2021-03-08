<?php

namespace Luannt\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Luannt\Contact\Mail\ContactMailable;
use Luannt\Contact\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        return view('contact::contact');
    }
    function send()
    {
        $contact=Contact::create(request()->all());
        Mail::to(config("contact.send_mail_to"))->send(new ContactMailable($contact));
    }
}
