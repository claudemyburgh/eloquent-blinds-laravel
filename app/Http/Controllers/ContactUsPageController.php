<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\View\View;

class ContactUsPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function __invoke(): View
    {
        SEOMeta::setTitle('Contact us');

        return view('contact-us');
    }
}
