<x-app-layout>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
        /* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    text-align:center;
}

/* Header styles */
header {
    background-color: #007BFF;
    color: #fff;
    text-align: center;
    padding: 1.25em 0;
    padding-top:3.75em;
}

/* Main content styles */
main {
    max-width: 75em;
    margin: 0 auto;
    padding: 1.25em;
}

/* Gallery container styles */
.gallery-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.25em;
}

/* Gallery item styles */
.gallery-item {
    flex: 1;
    min-width: calc(33.33% - 1.25em); /* Three columns with gap */
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Image styles */
.gallery-item img {
    width: 100%;
    height: auto;
    display: block;
}

/* Caption styles */
.caption {
    padding: 10px;
    background-color: #f0f0f0;
    text-align: center;
}

/* Responsive design */
@media screen and (max-width: 768px) {
    .gallery-item {
        min-width: calc(50% - 1.25em); /* Two columns with gap */
    }
}

@media screen and (max-width: 480px) {
    .gallery-item {
        min-width: 100%; /* Single column */
    }
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
   
    <header class="animated">
        <h1>Medical Experience in Tanzania</h1>
    </header>
    <main class="animated">
        <div class="gallery-container">
            <!-- Photo 1 -->
            <div class="gallery-item">
                <img src="images/baa.jpg" alt="Medical Clinic">
                <div class="caption">Providing Care at a Local Clinic</div>
            </div>

            <!-- Photo 2 -->
            <div class="gallery-item">
                <img src="images/ba.jpg" alt="Tanzanian Hospital">
                <div class="caption">Inside a Modern Tanzanian Hospital</div>
            </div>

            <!-- Photo 3 -->
            <div class="gallery-item">
                <img src="images/b.jpg" alt="Medical Outreach">
                <div class="caption">Medical Outreach in Rural Villages</div>
            </div>

            <!-- Photo 4 -->
            <div class="gallery-item">
                <img src="images/aaaa.jpg" alt="Medical Training">
                <div class="caption">Medical Training and Education</div>
            </div>

            <!-- Photo 5 -->
            <div class="gallery-item">
                <img src="images/baaa.jpg" alt="Healthcare Team">
                <div class="caption">Dedicated Healthcare Team in Tanzania</div>
            </div>

            <!-- Photo 6 -->
            <div class="gallery-item">
                <img src="images/aaaaa.jpg" alt="Emergency Care">
                <div class="caption">Providing Emergency Care</div>
            </div>

            <!-- Photo 7 -->
            <div class="gallery-item">
                <img src="images/a.jpg" alt="Maternal Health">
                <div class="caption">Improving Maternal Health</div>
            </div>

            <!-- Photo 8 -->
            <div class="gallery-item">
                <img src="images/aaa.jpg" alt="Healthcare Facilities">
                <div class="caption">State-of-the-Art Healthcare Facilities</div>
            </div>

            <!-- Photo 9 -->
            <div class="gallery-item">
                <img src="images/aaaaaa.jpg" alt="Medical Teamwork">
                <div class="caption">Collaborative Medical Teamwork</div>
            </div>

            <!-- Photo 10 -->
            <div class="gallery-item">
                <img src="images/aa.jpg" alt="Tanzanian Medical Landscape">
                <div class="caption">The Tanzanian Medical Landscape</div>
            </div>
        </div>
    </main>
    
</body>
</x-app-layout>