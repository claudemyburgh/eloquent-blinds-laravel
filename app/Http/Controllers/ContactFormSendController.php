<?php

namespace App\Http\Controllers;


use App\Events\ContactFormWasSubmitted;
use App\Http\Requests\FormContactRequest;
use App\Mail\ContactUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormSendController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(FormContactRequest $request)
    {

        event(new ContactFormWasSubmitted($request->only('name' , 'surname', 'email', 'phone' , 'subject', 'message')));

        return back()->withSuccess('Email successfully send');
    }
}
