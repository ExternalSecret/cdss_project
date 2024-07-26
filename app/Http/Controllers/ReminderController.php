<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        return view('reminders.index');
    }

    public function store(Request $request)
    {
        // Logic to store the reminder can be added here
        // For now, let's just return back to the reminders page
        return redirect()->route('reminders.index');
    }
}
