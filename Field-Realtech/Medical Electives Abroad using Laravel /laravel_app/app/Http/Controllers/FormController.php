<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application; // Add this import statement at the top
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage; 


class FormController extends Controller
{

    public function index()
    {
        // Retrieve the currently signed-in user's applications
        $applications = Application::where('user_id', auth()->id())->get();
    
        // Pass the applications to the view
        return view('applications', ['applications' => applications]);
    }

    public function showForm()
    {
        return view('form'); // Assuming you have a "form.blade.php" view
    }

    public function __construct()
    {
    $this->middleware('auth');
    }
    
    public function storeApplication(Request $request)
{
    // Check if the user has a 'pending' application
    $existingPendingApplication = Application::where('user_id', auth()->user()->id)
       ->where('status', 'Pending')
       ->first();

    if ($existingPendingApplication) {
        return redirect()->back()->with('status', 'You already have a pending application.');
    }

    // Validation rules for your form fields
    $rules = [
        'fullName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'university' => 'required|string|max:255',
        'degree' => 'required|string|max:255',
        'program' => 'required|array', // Change the validation rule to 'array'
        'program.*' => 'string|max:255', // Validate each program value within the array
       
        'duration' => 'required|integer',
        'englishProficiency' => 'required|string|max:255',
        'resume' => 'required|mimes:pdf,doc,docx|max:2048', // PDF, DOC, DOCX files allowed, max size 2MB
        'transcripts' => 'required|mimes:pdf,doc,docx|max:2048', // PDF, DOC, DOCX files allowed, max size 2MB
        'aidDocuments' => 'nullable|mimes:pdf,doc,docx|max:2048', // PDF, DOC, DOCX files allowed, max size 2MB        
        'accommodation' => 'nullable|string|max:255',
        'financialAid' => 'nullable|in:yes,no',
        'additionalQuestions' => 'nullable|string',
        'agreeTerms' => 'required|boolean',
    ];

    // Apply validation rules
    $validatedData = $request->validate($rules);

    // Check if 'agreeTerms' is checked and set it to '1' if it is
    $validatedData['agreeTerms'] = $request->has('agreeTerms') ? 1 : 0;

    // Create a new application record in the database
    $application = new Application;

    // Set the 'user_id' and 'status' for the new application
    $application->user_id = Auth::user()->id;
    $application->status = 'Pending';

    // Modify the 'program' field to store it as JSON
    $application->program = json_encode($validatedData['program']); // Encode the array as JSON

    // Remove the 'program' key from $validatedData as it's no longer needed
    unset($validatedData['program']);


    // Populate the application attributes using the 'fill' method
    $application->fill($validatedData);

    // Handle file uploads for Resume
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public', $fileName);
            $application->resume = $fileName;
        }
    
    // Handle file uploads for Transcripts
        if ($request->hasFile('transcripts')) {
            $file = $request->file('transcripts');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public', $fileName);
            $application->transcripts = $fileName;
        }
// Store the uploaded resume file in the 'resumes' directory
if ($request->hasFile('resume')) {
    $validatedData['resume'] = $request->file('resume')->store('public');
}

// Store the uploaded transcripts file in the 'transcripts' directory
if ($request->hasFile('transcripts')) {
    $validatedData['transcripts'] = $request->file('transcripts')->store('public');
}


    // Save the application record
    $application->save();

    // Redirect to a success page or home page
    return redirect('/dashboard')->with('status', 'Application submitted successfully!');
}


public function showApplications()
{
    // Retrieve applications for the currently signed-in user
    $applications = Application::where('user_id', Auth::id())->get();
    
    return view('applications', ['applications' => $applications]);
}


}
