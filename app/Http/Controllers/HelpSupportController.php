<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpSupportController extends Controller
{
    public function index()
    {
        return view('help_support/index');
    }

    public function faqs()
    {
        return view('help_support/faqs');
    }

    public function help_documentation()
    {
        return view('help_support/help_documentation');
    }

    public function support_contact()
    {
        return view('help_support/support_contact');
    }

    public function user_manual()
    {
        return view('help_support/user_manual');
    }
}
