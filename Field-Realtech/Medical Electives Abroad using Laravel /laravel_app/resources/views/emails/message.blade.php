<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }

        .container {
            max-width: 50em;
            margin: 0 auto;
            padding: 1.25em;
            margin-top: 1.25em;
        }

        .feedback-success {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            margin-top: 1.25em;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 1.25em;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        .btn-primary {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
@include('admin.header')
<div class="container">
    @if(session('success'))
        <div class="feedback-success">
            Message has been successfully sent!
        </div>
    @endif
    <br>
    <h2>Compose Email</h2>
    <form method="post" action="{{ route('send-email') }}">
        @csrf
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
        </div>
        <input type="hidden" name="user_emails" value="{{ request()->get('user_emails', '') }}">
        <button type="submit" name="send-email" class="btn btn-primary">Send Email</button>
    </form>
</div>
<script>
    // Retrieve the user_emails value from the hidden input field
    var userEmailsValue = document.querySelector('input[name="user_emails"]').value;

    // Split the comma-separated string into an array
    var userEmailsArray = userEmailsValue.split(',');

    // Log the contents of the userEmailsArray to the console
    console.log('User Emails:', userEmailsArray);
</script>
</body>
</html>
