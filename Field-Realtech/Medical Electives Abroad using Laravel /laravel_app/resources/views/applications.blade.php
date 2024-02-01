<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    /* Animation */
    .animated {
        animation: fadeInUp 1s ease-in-out; /* Add animation */
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Table Styles */
    .table-container {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .table-container table {
        width: 100%;
    }

    .table-container th,
    .table-container td {
        padding: 10px 20px;
        border-bottom: 1px solid #e2e8f0;
    }

    .table-container th {
        background-color: #f3f4f6;
        font-weight: 600;
    }

    .table-container tbody tr:hover {
        background-color: #f9fafb;
    }

    /* Unique styles for "View" button */
    .view-button {
        background-color: #4CAF50; /* Green background */
        color: white;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    /* Unique styles for "Edit" button */
    .edit-button {
        background-color: #337ab7; /* Blue background */
        color: white;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn.btn-primary {
        background-color: #007BFF; /* Blue background color */
        color: white; /* Text color */
        padding: 5px; /* Padding */
        width:10em;
        cursor: pointer; /* Pointer cursor */
        border-radius: 5px; /* Rounded corners */
        text-decoration: none; /* Remove underlines from links */
        text-align:center;
        margin-left:auto;
        margin-right:auto;
    }

    /* Hover state for the button */
    .btn.btn-primary:hover {
        background-color: green; /* Darker blue on hover */
    }
   
</style>

<x-app-layout> 
  <!-- Add the "Start Application" button conditionally -->
    @if (!$applications->contains('status', 'Pending') && !$applications->contains('status', 'Rejected') && !$applications->contains(function ($application) {
    return str_starts_with($application->status, 'Accepted at ');
}))

    <br>
    <h1 style="color:red; text-align:center;">Currently, you don't have any submitted Internship application form. Please start your application below:</h1><br>
    <div class="btn btn-primary"><a href="{{ route('form') }}">Start Application</a></div>

    @else





    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-x-auto shadow-xl sm:rounded-lg animated">
                <!-- Table to display user applications -->
                <div class="p-6 animated">

                    <h3 class="text-lg font-semibold mb-4">User Applications</h3>
                   

                           <!-- Display the application status and link to email inbox -->
                           @if ($applications->isNotEmpty())
    <div class="text-right text-sm mb-4">
        <p>Application Status: 
        @php
        $status = $applications[0]->status;
        $textColor = '';
        $emailLink = '';

        switch ($status) {
            case 'Pending':
                $textColor = 'orange';
                break;
            case 'Rejected':
                $textColor = 'red';
                break;
            default:
                if (str_starts_with($status, 'Accepted at ')) {
                    $textColor = 'green';
                    // Extract the hospital name from the status
                    $hospitalName = substr($status, 12); // Assuming "Accepted at " is 12 characters long
                    $status = "Accepted at $hospitalName";
                    // Assuming the email column is 'email'
                    $emailLink = "<a href='mailto:{$applications[0]->email}' style='background-color: green; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none;'>Email Inbox</a>";
                }
                break;
        }
        @endphp
        
        @if (str_starts_with($status, 'Accepted at '))
            <span style="color: green;">Congratulations! You have been accepted at {{ substr($status, 12) }}.</span></p>
            <span style="color: green;">Please visit your email inbox to confirm the offer and for further instructions and enrollment requirements. <br><br></span>{!! $emailLink !!}
        @elseif ($status === 'Pending')
            <span style="color: orange;">Your application is currently pending. Please wait patiently for document assessment.</span></p>
        @elseif ($status === 'Rejected')
            <span style="color: red;">We regret to inform you that your application has been rejected. Don't lose hope! You can consider reapplying in the next window. Stay tuned!
        @endif
    </div>
@endif



                    <div class="overflow-x-auto table-container">
                        <table>
                            <tbody>
                                @foreach($applications as $application)
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{ $application->fullName }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $application->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $application->phone }}</td>
                                </tr>
                                <tr>
                                    <th>University/College</th>
                                    <td>{{ $application->university }}</td>
                                </tr>
                                <tr>
                                    <th>Degree Program</th>
                                    <td>{{ $application->degree }}</td>
                                </tr>
                                <tr>
                                    <th>Preferred Hospital(s)</th>
                                    <td>{{ implode(', ', json_decode($application->program)) }}</td>
                                </tr>
                                <tr>
                                    <th>Duration (weeks)</th>
                                    <td>{{ $application->duration }}</td>
                                </tr>
                                <tr>
                                    <th>English Proficiency</th>
                                    <td>{{ $application->englishProficiency }}</td>
                                </tr>
                                <tr>
                                    <th>Resume</th>
                                    <td>
                                        @if ($application->resume)
                                            <!-- Provide a download link for the CV -->
                                            <a href="{{ asset('storage/' . $application->resume) }}" target="_blank" class="view-button">View CV</a>

                                            
                                        @else
                                            <!-- If there's no resume, show the file upload input -->
                                            <input type="file" class="file-input" data-field="resume" accept=".pdf,.doc,.docx">
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Transcripts</th>
                                    <td>
                                        @if ($application->transcripts)
                                            <!-- Provide a download link for the transcripts -->
                                            <a href="{{ asset('storage/' . $application->transcripts) }}" target="_blank" class="view-button">View Transcripts</a>

                                            
                                            <!-- Indicate that the transcripts are successfully updated -->
                                            <p class="success-message" style="display: none;">Transcripts Successfully Updated</p>
                                        @else
                                            <!-- If there are no transcripts, show the file upload input -->
                                            <input type="file" class="file-input" data-field="transcripts" accept=".pdf,.doc,.docx">
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Accommodation Type</th>
                                    <td>{{ $application->accommodation }}</td>
                                </tr>
                                <tr>
                                    <th>Financial Aid/Scholarship</th>
                                    <td>{{ $application->financialAid }}</td>
                                </tr>
                                <tr>
                                    <th>Reason to Apply</th>
                                    <td>{{ $application->additionalQuestions }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endif

</x-app-layout>




