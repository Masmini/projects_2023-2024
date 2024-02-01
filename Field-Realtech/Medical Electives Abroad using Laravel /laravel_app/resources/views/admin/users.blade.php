


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
            background-color: rgba(0,0,0,0.5);
        }
        th:first-child, td:first-child {
            text-align: left;
        }
        th:last-child, td:last-child {
            text-align: center;
        }
        .edit-button, .save-button {
            padding: 4px 8px;
            border: none;
            cursor: pointer;
        }
        .edit-button {
            background-color: #007BFF;
            color: white;
        }
        .save-button {
            background-color: #28A745;
            color: white;
        }
        .checkbox-col {
            text-align: center;
        }
        .the-div {
            display: flex;
            gap:5em;
        }
        select{
        width: 15em;
        padding: 0.625em;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    </style>
</head>
<body>
    @include('admin.header')
    <div class="container">
        <h2>Users</h2>

        <div class='the-div'>   
    
            <label for="status-select">Filter by Status:</label>
            <select id="status-select">
                <option value="none">Default</option>
                <option value="all">Select All</option>
                <option value="rejected">Select Rejected</option>
                <option value="pending">Select Pending</option>
                <option value="accepted">Select Accepted</option>
                <option value="not_applied">Select Not Applied</option>
                
            </select>

             <a href="{{ route('composeMessage', ['user_emails' => implode(',', $selectedUserEmails)]) }}" style="text-decoration:none; color:green ; padding:5px; box-shadow: 0 0 10px rgba(0,0,0,0.7); display:none; border-radius:5px;" id="the-link">Send Custom Message</a>

           


        </div>
        
       
  


        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="checkbox-col">
                        <input type="checkbox" class="user-checkbox" data-user-id="{{ $user->id }}" name="user_emails[]" id="user_{{ $user->id }}" value="{{ $user->email }}">

                        </td>
                        <td contenteditable="true">{{ $user->name }}</td>
                        <td contenteditable="true">{{ $user->email }}</td>
                        <td contenteditable="true">{{ $user->role }}</td>
                        <td>
                @if (in_array($user->email, $applicationEmails))
                    @php
                        $application = $applications->where('email', $user->email)->first();
                    @endphp
                    @if ($application && $application->status === 'Rejected')
                        <p class="remind-button" style="color:red" data-user-id="{{ $user->id }}" data-user-email="{{ $user->email }}" >Rejected</p>
                    @elseif ($application && $application->status === 'Pending')
                        <p class="remind-button" style="color:orange" data-user-id="{{ $user->id }} data-user-email="{{ $user->email }}"">Pending</p>
                    @else
                        <p class="remind-button" style="color:green" data-user-id="{{ $user->id }} data-user-email="{{ $user->email }}"">Accepted</p>
                    @endif
                @else
                    <p class="remind-button"  data-user-id="{{ $user->id }}" data-user-email="{{ $user->email }}">Not Applied</p>
                @endif
                <button class="save-button" data-user-id="{{ $user->id }}" data-user-email="{{ $user->email }}">Save</button>
            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
    // Convert the PHP $applications variable into a JavaScript array
    const applications = @json($applications);

    const statusSelect = document.getElementById('status-select');
    const userCheckboxes = document.querySelectorAll('.user-checkbox');
    const remindButtons = document.querySelectorAll('.remind-button');
    const emailLink = document.getElementById('the-link');

    // Function to show/hide users based on selected status
    function filterUsersByStatus(status) {
        let atLeastOneChecked = false; // Initialize a flag for at least one checkbox checked

        userCheckboxes.forEach((checkbox, index) => {
            const userStatus = remindButtons[index]?.textContent.toLowerCase();
            const userEmail = remindButtons[index]?.getAttribute('data-user-email');

            if (status === 'all') {
                checkbox.checked = true;
                updateEmailLinkHref();
            } else if (status === 'not_applied') {
                // Check if the user's email is not in the applications array
                const isNotApplied = !applications.some(app => app.email === userEmail) && userStatus !== 'accepted' && userStatus !== 'rejected' && userStatus !== 'pending';
                checkbox.checked = isNotApplied;
                updateEmailLinkHref();
            } else if (status === userStatus) {
                checkbox.checked = true;
                updateEmailLinkHref();
            } else {
                checkbox.checked = false;
                updateEmailLinkHref();
            }

            // Update the atLeastOneChecked flag
            if (checkbox.checked) {
                atLeastOneChecked = true;
            }
        });

        // Show/hide the emailLink based on the atLeastOneChecked flag
        if (atLeastOneChecked) {
            emailLink.style.display = 'inline';
        } else {
            emailLink.style.display = 'none';
        }
    }

    // Function to check if at least one checkbox is checked
    function checkIfAtLeastOneChecked() {
        let atLeastOneChecked = false;

        userCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                atLeastOneChecked = true;
                return; // Exit the loop if at least one checkbox is checked
            }
        });

        // Show/hide the emailLink based on the atLeastOneChecked flag
        if (atLeastOneChecked) {
            emailLink.style.display = 'inline';
        } else {
            emailLink.style.display = 'none';
        }
    }

    // Add an event listener to each checkbox
    userCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', checkIfAtLeastOneChecked);
    });

    // Handle select change event
    statusSelect.addEventListener('change', () => {
        const selectedStatus = statusSelect.value;
        filterUsersByStatus(selectedStatus);
    });

    const saveButtons = document.querySelectorAll('.save-button');
    const editableCells = document.querySelectorAll('td[contenteditable="true"]');

    saveButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const userId = button.getAttribute('data-user-id'); // Get the user ID from the button's data attribute
            const name = editableCells[index].innerText;
            const email = editableCells[index + 1].innerText;
            const role = editableCells[index + 2].innerText;

            // Ask for confirmation before editing
            const confirmation = confirm('Are you sure you want to edit this user?');
            if (confirmation) {
                fetch(`/admin/users/${userId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ name, email, role }),
                })
                    .then(response => {
                        if (response.ok) {
                            alert('Changes have been saved successfully');
                        } else {
                            console.error('Failed to save data');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    });

    function updateEmailLinkHref() {
    selectedUserEmails = []; // Remove the 'let' keyword here

    userCheckboxes.forEach(checkbox => {
        if (checkbox.checked) {
            const userEmail = checkbox.value; // Get the value attribute of the checkbox
            selectedUserEmails.push(userEmail);
        }
    });

    console.log('Selected User Emails:', selectedUserEmails);

    if (selectedUserEmails.length > 0) {
        const userEmailsParam = selectedUserEmails.join(',');
        emailLink.href = `/message?user_emails=${userEmailsParam}`;
        emailLink.style.display = 'inline';
    } else {
        emailLink.style.display = 'none';
    }
}


userCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        updateEmailLinkHref(); // Call the function to update the selectedUserEmails array
    });
});

</script>





</body>
</html>

