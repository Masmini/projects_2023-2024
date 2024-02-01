<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message; // Import the Message class
use Illuminate\Support\Facades\Mail; // Import the Mail facade



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['sendFeedback']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendFeedback(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'feedback' => 'required|string',
    ]);

    // Send an email to the default email address
Mail::raw($validatedData['feedback'], function (Message $message) use ($validatedData) {
    $message->to('robinsonjackson1237@gmail.com')
        ->subject($validatedData['subject'])
        ->from($validatedData['email'], $validatedData['name']);
});
     

     // Redirect back to the previous page with feedback
     return back()->with('feedback', $validatedData['feedback']);
}

}
