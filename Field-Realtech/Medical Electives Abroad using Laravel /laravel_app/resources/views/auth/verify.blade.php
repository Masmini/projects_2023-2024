<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            font-weight: bold;
            font-size: 1.25rem;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
            font-size: 1rem;
        }

        .alert {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 20px;
        }

        button.btn-link {
            color: #007bff;
            text-decoration: none;
            background: transparent;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.btn-link:hover {
            text-decoration: none;
            
            color: green;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Verify Your Email Address') }}</div>
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
