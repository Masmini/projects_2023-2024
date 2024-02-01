<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Internship to Tanzanian Hospitals</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
        }

        .container {
            align-items: center;
            padding: 1.25em;
            margin-top: 3.75em;
        }

        .contact-form {
            background-color: #fff;
            border-radius: 0.625em;
            box-shadow: 0 0 1.25em rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 28em;
            margin-left:auto;
           margin-right:auto;
        }

        .contact-form h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 1.25em;
        }

        .contact-form label {
            display: block;
            text-align: left;
            margin-bottom: 0.625em;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 23.7em;
            padding: 0.625em;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 1.25em;
        }

        .contact-form textarea {
            resize: none;
        }

        .contact-links {
            display:flex;
        }

        .contact-links h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 1.25em;
        }

        .contact-links img {
            width: 2.5em;
            height:2.5em;
            margin-right: 0.625em;
            vertical-align: middle;
            
        }

        .contact-links a {  
            flex:1;
        }
        .contact-links img:hover{
            box-shadow: 0 0 1.25em rgba(0, 0, 0, 0.6);
        }


        /* Add this style for spacing between label and input */
        .contact-form label {
            display: block;
            text-align: left;
            margin-bottom: 0.625em;
        }

        /* Add this style for spacing between elements */
        .contact-form .form-element {
            margin-bottom: 1.25em;
        }
          /* Style for the Submit Button */
    .contact-form button[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 12px 1.25em;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Style for the Submit Button on Hover */
    .contact-form button[type="submit"]:hover {
        background-color: #0056b3;
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

    .feedback-success {
    background-color: #4CAF50;
    color: white;
    padding: 1.25em;
    text-align: center;
    font-size: 18px;
        }
 
    </style>
</head>
<body>

@if(session('feedback'))
            <div class="feedback-success">
            Your Message is sent successfully<br>
            </div>
            @endif
            <br>

    <div class="container animated">

            

        <div class="contact-form">
            <h1>Contact Us</h1>
            <form action="{{ route('send-feedback') }}" method="POST">

            @csrf 

           
                <!-- Name Field -->
                <div class="form-element">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" readonly required>
                </div>

                <!-- Email Field -->
                <div class="form-element">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" readonly required>
                </div>

                <!-- Subject Field -->
                <div class="form-element">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <!-- Feedback Field -->
                <div class="form-element">
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" rows="5" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-element">
                    <button type="submit">Send</button>
                </div>
            </form>
            <br>
            
            <h1>Check us On Social Media</h1>
            <div class="contact-links">
           
            <a href="#" >
                <img src="/images/insta.png" alt="Instagram">
            </a>
            <br><br>
            <a href="#">
                <img src="/images/gmail.png" alt="Gmail">
            </a>
            <br><br>
            <a href="#" >
                <img src="/images/ln.png" alt="LinkedIn">
            </a>
            <br> <br>
            <a href="#" >
                <img src="/images/fb.png" alt="Facebook">
            </a>

        </div>
        </div>

       
    </div>

    <!-- Footer and other elements here -->
</body>
</html>

</x-app-layout>