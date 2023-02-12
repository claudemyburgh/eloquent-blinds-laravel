<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function __invoke(): View
    {
        $clients = Client::paginate();
        return view('dashboard.index', compact('clients'));
    }
}
