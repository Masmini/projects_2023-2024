<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageEmail;



class AdminController extends Controller
{
    // Admin dashboard view
    public function index()
    {
        return view('admin.dashboard');
    }

   // View all users
   public function viewUsers(Request $request)
{
    $users = User::all();
    $applicationEmails = Application::pluck('email')->toArray();
    $applications = Application::all(); // Retrieve all applications

    // Get the selected user emails from the request
    $selectedUserEmails = $request->query('user_emails', []);

    return view('admin.users', compact('users', 'applicationEmails', 'applications', 'selectedUserEmails'));
}


    // View all applications
    public function viewApplications()
    {
        $applications = Application::all();
        return view('admin.applications', compact('applications')); // Pass the $applications variable to the view
    }

    public function updateUser(Request $request, $id)
    {
        // Validate and update user data in the database based on the $id
        // You can use Eloquent or Query Builder to update the user's record

        // Example using Eloquent:
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);

        return response()->json(['message' => 'User data updated successfully'], 200);
    }



    public function updateApplicationStatus(Request $request, $id)
{
    // Validate the request data if necessary

    // Find the application by ID
    $application = Application::find($id);

    if (!$application) {
        return response()->json(['message' => 'Application not found'], 404);
    }

    // Update the status
    $application->status = $request->input('status');
    $application->save();

    return response()->json(['message' => 'Application status updated successfully']);
}

public function logout()
{
    auth()->logout(); // Logout the currently authenticated user
    return redirect('/login'); // Redirect to the login page
}

public function showComposeMessage(Request $request)
{
    // Retrieve selected user emails from the query parameters
    $selectedUserEmails = explode(',', $request->query('user_emails', ''));

      

    // You can retrieve user details based on selectedUserEmails if needed

    return view('emails.message', [
        'userEmails' => $selectedUserEmails, // Pass the selected user emails to the view
    ]);
}



public function sendEmail(Request $request)
{
    // Validate subject and message
    $request->validate([
        'subject' => 'required',
        'message' => 'required',
        'user_emails' => 'required', // Ensure you have this validation rule
    ]);

    $userEmailsString = $request->input('user_emails', ''); // Get the user emails as a comma-separated string
    $userEmails = explode(',', $userEmailsString);

    // You can retrieve additional email details like subject and content from the form
    $subject = $request->input('subject');
    $messageContent = $request->input('message');

    try {
        foreach ($userEmails as $email) {
            // Send a separate email to each recipient
            \Mail::raw($messageContent, function ($message) use ($email, $subject) {
                $message->to($email)
                    ->subject($subject);
            });
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Email sent successfully');
    } catch (\Exception $e) {
        // Handle email sending errors
        return redirect()->back()->with('error', 'Email sending failed: ' . $e->getMessage());
    }
}





}
