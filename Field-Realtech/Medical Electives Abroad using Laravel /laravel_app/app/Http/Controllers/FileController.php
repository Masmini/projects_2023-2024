<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function viewFile($field)
{
    // Get the currently signed-in user's ID
    $userId = auth()->id();

    // Find the user's application with the given field
    $application = Application::where('user_id', $userId)->first();

    if (!$application || !$application->{$field}) {
        abort(404); // File or application not found
    }

    // Get the file path from storage
    $filePath = storage_path('app/public/' . $application->{$field});

    // Check if the file exists
    if (!file_exists($filePath)) {
        abort(404); // File not found in storage
    }

    // Define the file content type
    $contentType = mime_content_type($filePath);

    // Create a response with the file content
    $response = new Response(file_get_contents($filePath));
    $response->header('Content-Type', $contentType);

    return $response;
}
}
