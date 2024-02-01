<x-app-layout>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            margin: 0;
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            text-align: center;
            padding: 1.25em;
            margin-top: 0.625em;
            background-color: #fff;
            border-radius: 0.625em; /* Rounded corners for a modern appearance */
            box-shadow: 0 0 1.25em rgba(0, 0, 0, 0.2); /* Slight shadow for depth */
            width:80em;
            margin-right:auto;
            margin-left:auto;
        }

        .logo {
            width: 2.5em;
            height: 2.1875em;
            border-radius: 3px;
        }

      

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 0.625em;
        }

        p {
            color: #777;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 1.25em;
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

        .team-members {
            display: flex;
            flex-wrap: wrap;
            gap:6em;
            margin-top: 2.5em;
            padding:8px;
            justify-content:center;
            text-align:center;
        }

        .team-member-card {
            flex: 1
            margin: 1.25em;
            padding: 5px;
            border-radius: 0.625em;
            display: flex;
            width:30em;
            gap:1.875em;

        }

        .team-member-photo {
            width: 9.375em;
            height: 12.5em;
            border-radius: 5px;
            object-fit: top;
            flex:1;
            box-shadow: 0 0 1.25em rgba(0, 0, 0, 0.4); /* Slight shadow for depth */
        }

        .team-member-info {
            flex: 1;
            text-align: left;
        }

        .team-member-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.625em;
        }

        .team-member-role {
            font-size: 18px;
            color: #777;
            margin-bottom: 0.625em;
        }

        .team-member-expectations {
            font-size: 1em;
            color: #777;
            margin-bottom: 0.625em;
        }

        .team-member-contact {
            display: flex;
            justify-content: space-between;
            width: 100%;
        
        }

        .team-member-contact img {
            width: 1.875em;
            height: 1.875em;
        }
    </style>
</head>
<body>
    <div class="container animated">
        <div class="about-us-content animated">
            <h1>About Us</h1>
            <p>Welcome to Internship to Tanzanian Hospitals - Your Gateway to Medical Electives Abroad!</p>
            <p>Our mission is to connect international medical students with exceptional elective opportunities in Tanzania. We believe that learning beyond borders and immersing yourself in diverse healthcare settings can transform your medical education.</p>
            <p>Our team is dedicated to facilitating meaningful experiences for aspiring healthcare professionals. We work closely with top hospitals and institutions in Tanzania to provide you with the best elective programs and support throughout your journey.</p>
            <p>Explore the possibilities, expand your horizons, and embark on a transformative medical adventure with Internship to Tanzanian Hospitals!</p>
        </div> <br> <br>
    
    <h1 class="animated">Our Team</h1>
    <div class="team-members animated">
        
        <!-- Team Member 1: Masaka Alex -->
        <div class="team-member-card">
            <img src="/images/1517022546858.jpg" alt="Masaka Alex" class="team-member-photo">
            <div class="team-member-info">
                <div class="team-member-name">Masaka Alex</div>
                <div class="team-member-role">Medical Coordinator</div>
                <div class="team-member-expectations">
                    "As the Medical Coordinator, I ensure a smooth and enriching experience during your elective in Tanzania."
                </div>
                <div class="team-member-contact">
                    <a href="/chat/masaka_alex"><img src="/images/gmail.png" alt="Gmail"></a>
                    <a href="/chat/masaka_alex"><img src="/images/ln.png" alt="LinkedIn"></a>
                    <a href="/chat/masaka_alex"><img src="/images/1690643591twitter-x-logo-png.png" alt="Twitter"></a>
                </div>
            </div>
        </div>

        <!-- Team Member 2: Arnold Masmini -->
        <div class="team-member-card">
            <img src="/images/1692810254271.jpg" alt="Arnold Masmini" class="team-member-photo">
            <div class="team-member-info">
                <div class="team-member-name">Arnold Masmini</div>
                <div class="team-member-role">Hospital Liaison</div>
                <div class="team-member-expectations">
                    "As the Hospital Liaison, I connect you with top medical institutions for your elective placements."
                </div>
                <div class="team-member-contact">
                    <a href="/chat/arnold_masmini"><img src="/images/gmail.png" alt="Gmail"></a>
                    <a href="/chat/arnold_masmini"><img src="/images/ln.png" alt="LinkedIn"></a>
                    <a href="/chat/arnold_masmini"><img src="/images/1690643591twitter-x-logo-png.png" alt="Twitter"></a>
                    <a href="/chat/arnold_masmini"><img src="/images/insta.png" alt="Insta"></a>
                </div>
            </div>
        </div>

        <!-- Team Member 3: Robinson Eliona -->
        <div class="team-member-card">
            <img src="/images/08bd9d06-0220-4027-9d72-16372f8a3c88.jpg" alt="Robinson Eliona" class="team-member-photo">
            <div class="team-member-info">
                <div class="team-member-name">Robinson Eliona</div>
                <div class="team-member-role">Student Support</div>
                <div class="team-member-expectations">
                    "I provide assistance and support to ensure your elective journey is successful and enjoyable."
                </div>
                <div class="team-member-contact">
                <a href="/chat/robinson_eliona"><img src="/images/fb.png" alt="Facebook"></a>
                    <a href="/chat/robinson_eliona"><img src="/images/gmail.png" alt="Gmail"></a>
                    <a href="/chat/robinson_eliona"><img src="/images/ln.png" alt="LinkedIn"></a>
                    <a href="/chat/robinson_eliona"><img src="/images/1690643591twitter-x-logo-png.png" alt="Twitter"></a>
                </div>
            </div>
        </div>

        <!-- Team Member 4: Restuta John -->
        <div class="team-member-card">
            <img src="/images/person2.jpg" alt="Restuta John" class="team-member-photo">
            <div class="team-member-info">
                <div class="team-member-name">Restuta John</div>
                <div class="team-member-role">Community Engagement</div>
                <div class="team-member-expectations">
                    "I work on community engagement projects, connecting you with local communities for impactful experiences."
                </div>
                <div class="team-member-contact">
                    <a href="/chat/restuta_john"><img src="/images/gmail.png" alt="Gmail"></a>
                    <a href="/chat/restuta_john"><img src="/images/insta.png" alt="Insta"></a>
                    <a href="/chat/restuta_john"><img src="/images/1690643591twitter-x-logo-png.png" alt="Twitter"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</x-app-layout>