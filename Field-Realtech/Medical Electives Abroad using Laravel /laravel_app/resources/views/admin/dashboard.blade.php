

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <style>
        /* Reset some default styles */
body, h1, h2, h3, ul, li {
    margin: 0;
    padding: 0;
}

/* Basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.admin-container {
    display: flex;
}

.admin-box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 20px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease-in-out;
    text-decoration: none;
    color:black;
}

.admin-box:hover {
    transform: translateY(-3px);
    color:blue;
}


.admin-box img {
    max-width: 100px;
    height: auto;
    margin-bottom: 10px;
}

/* Media queries for responsiveness (customize as needed) */
@media (max-width: 768px) {
    .admin-container {
        flex-direction: column;
        align-items: center;
    }
}

    </style>
</head>
<body>
@include('admin.header')
    <div class="admin-container">
        
            <a class="admin-box" href="{{ route('admin.users') }}">
                <img src="{{ asset('images/users.jpg') }}" alt="Users">
                <p>Click to view Users</p>
            </a>
        
       
            <a class="admin-box" href="{{ route('admin.applications') }}">
                <img src="{{ asset('images/applications.jpg') }}" alt="Applications">
                <p>Click to view Applications</p>
            </a>
       
    </div>
</body>
</html>
