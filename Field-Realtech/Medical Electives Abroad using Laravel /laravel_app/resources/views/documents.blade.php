<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents - Internshipstz</title>
    <style>
       /* Reset CSS */
       * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            margin: 0;
            background-color: azure;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

    </style>
</head>
<body>
    @include('header')

   
        <h1>Documents</h1>
 

    <!-- Documents Content Section -->
    <section>
        <!-- Add your documents or content related to Documents page here -->
        <!-- For example: -->
        <div>
            <h2>Document 1</h2>
            <p>Description of Document 1.</p>
        </div>
        <div>
            <h2>Document 2</h2>
            <p>Description of Document 2.</p>
        </div>
        <!-- ... Add more documents or content ... -->
    </section>

    <!-- Footer Section -->
    @include('footer')

</body>
</html>
