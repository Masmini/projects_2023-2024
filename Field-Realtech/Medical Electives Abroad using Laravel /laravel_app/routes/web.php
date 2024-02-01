<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\FormController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;






Route::middleware(['admin'])->group(function () {
    // Your admin-only routes go here
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'viewUsers'])->name('admin.users');
    Route::get('/admin/applications', [AdminController::class, 'viewApplications'])->name('admin.applications');
    Route::view('/admin/header','admin.header');

    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout'); // Add this logout route

   // Update status route
   Route::put('/admin/applications/{id}', [AdminController::class, 'updateApplicationStatus'])->name('admin.updateApplicationStatus');

   // Update user data route with a unique URL structure
   Route::put('/admin/users/{id}', [AdminController::class, 'updateUser'])->name('admin.updateUser');






});





// Define routes for public pages accessible to all users
Route::get('/', function () {
    return view('home');
});
Route::post('/send-feedback', [HomeController::class, 'sendFeedback'])->name('send-feedback');
Route::view('home', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contactus', 'contactus')->name('contactus');
Route::view('faq', 'faq')->name('faq');
Route::view('photos', 'photos')->name('photos');

Route::get('/message', [AdminController::class, 'showComposeMessage'])->name('composeMessage');

// Define a route for sending emails
Route::post('/send-email', [AdminController::class, 'sendEmail'])->name('send-email');



// Define routes for authenticated users with middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', // Add the 'verified' middleware here
])->group(function () {
    // Dashboard and other authenticated routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('verified'); // Add 'verified' middleware here

    // Other authenticated routes
    Route::get('/about_02', function () {
        return view('about_02');
    })->name('about_02')->middleware('verified'); // Add 'verified' middleware here

    Route::get('/contactus_02', function () {
        return view('contactus_02');
    })->name('contactus_02')->middleware('verified'); // Add 'verified' middleware here

    Route::get('/faq_02', function () {
        return view('faq_02');
    })->name('faq_02')->middleware('verified'); // Add 'verified' middleware here

    Route::get('/conditions', function () {
        return view('conditions');
    })->name('conditions')->middleware('verified'); // Add 'verified' middleware here

    Route::get('/photos_02', function () {
        return view('photos_02');
    })->name('photos_02')->middleware('verified'); // Add 'verified' middleware here

     // Application form
    Route::get('/form', function (Request $request) {
        // Check if the HTTP referrer matches the /applications URL
        if ($request->headers->get('referer') === route('applications')) {
            return view('form');
        } else {
            // Redirect to some other page or show an error message
            return redirect()->route('applications')->with('error', 'Access denied. Please access the form from /applications.');
        }
    })->name('form');

        // Route for Application form submission
    Route::post('/form', [FormController::class, 'storeApplication'])->name('submit.application');

    Route::get('/applications', [FormController::class, 'showApplications'])->name('applications');

    Route::post('/update-file', [FormController::class, 'updateFile'])->name('update.file');

    Route::get('/view-file/{field}', 'FormController@viewFile')->name('view-file');
});


   


    




// ... Other routes ...
Auth::routes(['verify' => true]);



// Catch-all route for unauthenticated users
Route::get('{any}', function () {
    return redirect()->route('login');
})->where('any', 'home|about|contactus|faq|photos');
