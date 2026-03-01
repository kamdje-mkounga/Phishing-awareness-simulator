<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\PhishingLog;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'logs' => PhishingLog::latest()->get()
        ]);
    }
}
