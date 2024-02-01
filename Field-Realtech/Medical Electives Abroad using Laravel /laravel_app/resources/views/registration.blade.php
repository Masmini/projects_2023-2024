<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration  form</title>
    <style>
        body{
            padding:0;
            margin:0;
            background-color:whitesmoke;
            font-family: Arial, sans-serif;
        }
.registration-form {
    max-width: 25em;
    margin: 0 auto;
    padding: 1.25em;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
            text-align: center;
            color: blue;
            margin-top: 1.875em;
            font-size: 28px;
            padding-top: 3.75em;
        }

/* Style form fields and labels */
.form-group {
    margin-bottom: 1.25em;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
p {
            color: black;
            text-align: center;
            margin-top: 0.9375em;
        }

        p a {
            color: blue;
            text-decoration: none;
        }

        p a:hover {
            color: green;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 0.9375em;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

/* Style the Register button */
.btn-primary {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/* Style the Register button on hover */
.btn-primary:hover {
    background-color: green;
}
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

    </style>
</head>
<body>
@include('header')
    <h2 class="animated">Sign-Up </h2>

<form method="POST" action="registration" class="registration-form" class="animated">
    @csrf

    <div class="form-group animated">
        <label for="name">Full-Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }} "Placeholder="e.g: Firstname Lastname" required autofocus>
    </div>

    <div class="form-group animated">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
    </div>

    <div class="form-group animated">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="form-group animated">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Sign-Up</button>
</form>

<p class="animated">Already having an account? <a href="/login">Sign-In</a></p>
</body>
</html>