
    <x-app-layout>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        background-color: whitesmoke;
        margin: 0;
        padding: 0;
        
    }

    /* Container styles */
    .container {
        max-width: 50em;
        margin: 0 auto;
        padding: 1.25em;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    /* Form styles */
    form {
        margin-top: 1.25em;
    }

    /* Section headers */
    h2 {
        margin-top: 1.25em;
        color: #333;
    }

    h1{
        color:green;
    }

    /* Label styles */
    label {
        display: block;
        margin-top: 0.625em;
    }

    .choice{
        display: block;
        color:orange;
    }

    /* Input styles */
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"]{
        width: 48em;
        padding: 0.625em;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    select{
        width: 49.4em;
        padding: 0.625em;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    input[type="file"]{
        width: 48.8em;
        padding: 0.625em;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    textarea {
        width: 100%; /* Set the width to 100% to fill the container */
        height: 200px; /* Set the initial height as needed */
        padding: 0.625em;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        resize: vertical; /* Allow vertical resizing */
    }

    /* File input style */
    input[type="file"] {
        padding: 5px;
    }

    /* Radio button styles */
    input[type="radio"] {
        margin-right: 5px;
    }

    /* Submit button styles */
    button[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 0.625em 1.25em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        margin-top: 1.25em;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Terms and conditions link style */
    a {
        color: #007BFF;
        text-decoration: none;
    }
            /* Animation */
            .animated {
            animation: fadeInUp 1s ease-in-out; /* Add animation */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(0.625em); 
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #aid_documents{
            display:none;
        }
</style>


</head>
<body>
    <div class="container animated">
        
        <form action="{{ route('submit.application') }}" method="post" enctype="multipart/form-data" id="applicationForm">
        @csrf

        <!-- Display validation errors here -->
    <div class="alert alert-danger">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

            <h1>Internship Application Form</h1>
            <!-- Personal Information -->
            <section>
                <h2>Personal Information</h2>
                 <!-- Full Name -->
              <label for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullName" class="form-control" value="{{ auth()->user()->name }}" required readonly>
       
                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required readonly>
    
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>

                <!-- Add more personal information fields as needed -->
            </section>

            <!-- Educational Background -->
            <section>
                <h2>Educational Background</h2>
                <label for="university">Current University/College</label>
                <input type="text" id="university" name="university" required>

                <label for="degree">Degree Program</label>
                <input type="text" id="degree" name="degree" required>

                <!-- Add more educational background fields as needed -->
            </section>

            <!-- Internship Preferences -->
            <section>
                <h2>Internship Preferences</h2>
                <label>Preferred Internship Programs</label><br>
<div> <label for="program_muhimbili" class='choice'>
    <input type="checkbox" id="program_muhimbili" name="program[]" value="Muhimbili Hospital">
   Muhimbili Hospital</label>
</div> <br>
<div><label for="program_kcmc" class='choice'>
    <input type="checkbox" id="program_kcmc" name="program[]" value="KCMC Hospital">
    KCMC Hospital</label>
</div><br>
<div><label for="program_agakhan" class='choice'>
    <input type="checkbox" id="program_agakhan" name="program[]" value="AgaKhan Hospital">
    AgaKhan Hospital</label>
</div> <br>
<div><label for="program_hindumandal" class='choice'>
    <input type="checkbox" id="program_hindumandal" name="program[]" value="Hindu Mandal Hospital">
    Hindu Mandal Hospital</label>
</div> <br>


                <label for="duration">Desired Internship Duration</label>
                <input type="number" id="duration" name="duration" min="8" max="40" required> weeks

                <!-- Add more internship preference fields as needed -->
            </section>

            <!-- Language Proficiency -->
            <section>
                <h2>Language Proficiency</h2>
                <label for="englishProficiency">Proficiency in English</label>
                <select id="englishProficiency" name="englishProficiency">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>

                <!-- Add more language proficiency fields as needed -->
            </section>

            <!-- Attachments -->
            <section>
                <h2>Attachments</h2>
                <label for="resume">Resume/CV</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

                <label for="transcripts">Transcripts</label>
                <input type="file" id="transcripts" name="transcripts" accept=".pdf,.doc,.docx" required>



                <!-- Add more attachment fields as needed -->
            </section>

            <!-- Accommodation Preferences -->
            <section>
                <h2>Accommodation Preferences</h2>
                <label for="accommodation">Preferred Accommodation Type</label>
                <select id="accommodation" name="accommodation">
                    <option value="Shared Apartments">Shared Apartments</option>
                    <option value="Homestays">Homestays</option>
                    <option value="Dormitories">Dormitories</option>
                </select>

                <!-- Add more accommodation preference fields as needed -->
            </section>

           <!-- Financial Information -->
<section>
    <h2>Financial Information</h2>
    <label for="financialAid">Financial Aid/Scholarship Application</label>
    <input type="radio" id="financialAidYes" name="financialAid" value="yes"> Yes
    <input type="radio" id="financialAidNo" name="financialAid" value="no"> No

    <!-- Add a hidden input field to store the selected value -->
    <input type="hidden" id="financialAidValue" name="financialAidValue" value="no">

    <label for="aidDocuments" id="aid_documents">Financial Assistance Proof Documents</label>
    <input type="file" id="aidDocuments" name="aidDocuments" accept=".pdf,.doc,.docx" style="display: none;">

    <!-- Add more financial information fields as needed -->
</section>

            <!-- Additional Questions -->
            <section>
                <h2>Additional Questions</h2>
                <label for="additionalQuestions">Why do you want to participate in this program?</label>
                <textarea id="additionalQuestions" name="additionalQuestions" rows="4"></textarea>

                <!-- Add more additional questions as needed -->
            </section>

            <!-- Terms and Conditions -->
            <section>
                <h2>Terms and Conditions</h2>
                <label>
                <input type="checkbox" id="agreeTerms" name="agreeTerms" value="1" required>
                I agree to the <a href="conditions">terms and conditions</a>.
                </label>

            </section>

            <!-- Submit Button -->
            <button type="submit" id="submitButton">Submit Application</button>
            
        </form>
    </div>


<script>
    // Get the radio buttons and the file input
    const financialAidYes = document.getElementById('financialAidYes');
    const financialAidNo = document.getElementById('financialAidNo');
    const aidDocuments = document.getElementById('aidDocuments');
    const financialAidValue = document.getElementById('financialAidValue');
    const aid_documents = document.getElementById('aid_documents');

    // Add event listeners to the radio buttons to toggle the file input visibility
    financialAidYes.addEventListener('change', () => {
        aidDocuments.style.display = 'block'; // Show the file input
        aid_documents.style.display = 'block'; // Show the file input
        financialAidValue.value = 'yes'; // Set the hidden input value to 'yes'
        aidDocuments.setAttribute('required', 'required'); // Make the file input required
    });

    financialAidNo.addEventListener('change', () => {
        aidDocuments.style.display = 'none'; // Hide the file input
        aid_documents.style.display = 'none'; // Show the file output
        financialAidValue.value = 'no'; // Set the hidden input value to 'no'
        aidDocuments.removeAttribute('required'); // Remove the required attribute
    });


    document.addEventListener('DOMContentLoaded', function() {
        // Get references to form and submit button
        const form = document.getElementById('applicationForm');
        const submitButton = document.getElementById('submitButton');

        // Get all checkboxes by name attribute
        const programCheckboxes = document.querySelectorAll('input[name="program[]"]');

        // Function to check if at least one checkbox is checked
        function isAtLeastOneCheckboxChecked() {
            for (const checkbox of programCheckboxes) {
                if (checkbox.checked) {
                    return true;
                }
            }
            return false;
        }

        // Add a click event listener to the submit button
        submitButton.addEventListener('click', function(event) {
            if (!isAtLeastOneCheckboxChecked()) {
                alert('Please select at least one Hospital.');
                event.preventDefault(); // Prevent form submission
            }
        });
    });

</script>    
</body>


</x-app-layout>