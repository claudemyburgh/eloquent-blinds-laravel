<?php

namespace App\Http\Controllers\Api;

use App\Events\ContactFormWasSubmitted;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormContactRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactFormSendController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param FormContactRequest $request
     * @return Response
     */
    public function __invoke(FormContactRequest $request)
    {
        event(new ContactFormWasSubmitted($request->only('name', 'surname', 'email', 'phone' , 'subject', 'message')));
    }
}
