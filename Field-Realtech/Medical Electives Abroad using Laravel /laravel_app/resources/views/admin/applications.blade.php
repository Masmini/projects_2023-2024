<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2em;
            background-color: white;
        }
        h2 {
            margin-top: 3em;
            text-align: center;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: rgba(0, 0, 0, 0.5);
        }
        th:first-child, td:first-child {
            text-align: left;
        }
        th:last-child, td:last-child {
            text-align: left;
        }
        .save-button {
            padding: 4px 8px;
            border: none;
            cursor: pointer;
            background-color: green;
            color: white;
        }
        td[contenteditable="true"] {
            background-color: rgba(0,0,255,0.1);
        }
        .applicant-row:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('admin.header')
    <div class="container">
        <h2>Applications</h2>
        <table>
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $serialNumber = 1; @endphp
                @foreach ($applications as $application)
                <tr class="applicant-row">
                    <td>{{ $serialNumber++ }}</td>
                    <td>{{ $application->fullName }}</td>
                    <td>{{ $application->email }}</td>
                    <td>
                        <button class="view-button" data-application-id="{{ $application->id }}" style="background-color: green; color:whitesmoke;">Show Application</button>
                    </td>
                </tr>
                <tr class="details-row" style="display: none;">
                    <td colspan="3">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>{{ $application->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $application->phone }}</td>
                            </tr>
                            <tr>
                                <td>University</td>
                                <td>{{ $application->university }}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{ $application->degree }}</td>
                            </tr>
                            <tr>
                                <td>Program</td>
                                <td>{{ $application->program }}</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td>{{ $application->duration }}</td>
                            </tr>
                            <tr>
                                <td>English Proficiency</td>
                                <td>{{ $application->englishProficiency }}</td>
                            </tr>
                            <tr>
                                <td>Resume</td>
                                <td><a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a></td>
                            </tr>
                            <tr>
                                <td>Transcripts</td>
                                <td><a href="{{ asset('storage/' . $application->transcripts) }}" target="_blank">View Transcripts</a></td>
                            </tr>
                            <tr>
                                <td>Accommodation</td>
                                <td>{{ $application->accommodation }}</td>
                            </tr>
                            <tr>
                                <td>Financial Aid</td>
                                <td>{{ $application->financialAid }}</td>
                            </tr>
                            <tr>
                                <td>Additional Questions</td>
                                <td>{{ $application->additionalQuestions }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td class="status" contenteditable="true">{{ $application->status }}</td>
                            </tr>
                            <tr>
                                <td>Action</td>
                                <td>
                                    <button class="save-button" data-application-id="{{ $application->id }}">Save</button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const viewButtons = document.querySelectorAll('.view-button');

    viewButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const applicationId = button.getAttribute('data-application-id');
            const detailsRow = button.closest('.applicant-row').nextElementSibling;

            if (detailsRow) {
                if (detailsRow.style.display === 'none') {
                    detailsRow.style.display = 'table-row';
                    button.innerText = 'Hide Application'; // Change button text
                } else {
                    detailsRow.style.display = 'none';
                    button.innerText = 'Show Application'; // Change button text
                }
            }
        });
    });
});




        document.addEventListener("DOMContentLoaded", function () {
            const saveButtons = document.querySelectorAll('.save-button');

            // Get the CSRF token from the meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            saveButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const applicationId = button.getAttribute('data-application-id');
                    const row = button.closest('table'); // Find the parent table

                    // Find the .status element within the table
                    const statusField = row.querySelector('.status');

                    if (statusField) {
                        const newStatus = statusField.innerText.trim(); // Remove leading/trailing whitespace

                        // Ask for confirmation before editing
                        const confirmation = confirm('Are you sure you want to edit this application?');
                        if (confirmation) {
                            fetch(`/admin/applications/${applicationId}`, {
                                method: 'PUT', // Use PUT method for updates
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken, // Use the CSRF token here
                                },
                                body: JSON.stringify({ status: newStatus }),
                            })
                            .then((response) => {
                                if (response.ok) {
                                    alert('Changes have been saved successfully');
                                } else {
                                    console.error('Failed to save data');
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
