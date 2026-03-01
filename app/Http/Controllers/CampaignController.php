<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index(): View
    {
        return view('campaigns.index', [
            'campaigns' => Campaign::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('campaigns.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->only([
            'subject',
            'email_body',
            'phishing_link'
        ]);
    
        Campaign::create($data);
    
        return redirect()->route('campaigns.index')
                         ->with('success', 'Campaign created');
    }
}