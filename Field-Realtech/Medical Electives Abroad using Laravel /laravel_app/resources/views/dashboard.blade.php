<x-app-layout>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

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
            background-color: whitesmoke;
        }

        /* Header Styles */
        header {
            background-color: #333;
            color: white;
            padding: 0.625em 0;
            text-align: center;
        }

        #navbar-right {
            margin-top: 0.625em;
            margin-left:2.74em;
            position:relative;
        }





.search-button:hover {
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 5);
}

              /* Hero Section Styles */
              #hero {
    background-size: cover;
    color: white;
    text-align: center;
    padding: 100px 0;
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 0.1);
    animation: rotateBackground 20s linear infinite;
    
}

@keyframes rotateBackground {
    0% {
        background-image: url('images/Medical-Internships-for-High-School-Students-Graphic-3.jpg');
    }
    10% {
        background-image: url('images/Medical-Internships-for-High-School-Students-Graphic-3.jpg');
    }
    20% {
        background-image: url('images/a.jpg');
    }
    30% {
        background-image: url('images/a.jpg');
    }
    40% {
        background-image: url('images/aaaaa.jpg');
    }
    50% {
        background-image: url('images/aaaaa.jpg');
    }
    60% {
        background-image: url('images/aaaaaa.jpg');
    }
    70% {
        background-image: url('images/aaaaaa.jpg');
    }
    80% {
        background-image: url('images/aaaa.jpg');
    }
    90% {
        background-image: url('images/aaaa.jpg');
    }
    95% {
        background-image: url('images/baaa.jpg');
    }
    100% {
        background-image: url('images/baaa.jpg');
    }

}




a:hover{
    color:green;
}



        /* Featured Destinations Styles */
 #electives {
            padding: 0.625em;
            text-align: center;
            display:flex;
            margin-left:30px;
        }

        /* Add these CSS styles to your existing stylesheet */
.destination{
    margin-top: 2.5em;
    padding: 3px;
    border-radius: 0.625em;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 0.1);
}

.destination:hover {
    transform: scale(1.02); /* Enlarge the card on hover */
}

.destination p {
    font-size: 16px;
    color: #777; /* Text color */
    margin-bottom: 0.625em;
}

.destination h3 {
    font-size: 24px;
    color: #333; /* Heading color */
    margin-bottom: 0.625em;
}

.destination img {
    max-width: 100%;
    height: 20em;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
}

.destination .cta-button {
    background-color: green; /* Button background color */
    color: white; /* Button text color */
    border: none;
    border-radius: 5px;
    padding: 0.625em 1.25em;
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
    margin-top: auto; /* Push the button to the bottom of the card */
}

.destination .cta-button:hover {
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 5);
}


        .info {
            border-radius: 5px;
            background-color: white;
            color: black;
            padding: 5px;
            margin-left:auto;
            margin-right:auto;
            
        }

        .right {
            margin-top: 1.45em;
            flex: 1;
            border-radius: 5px;
            margin-right: 3px;
            margin-bottom: 24px;
            padding: 5px;
        }

        .left {
            flex: 2;
            border: 3px solid transparent;
            border-radius: 5px;
        }

        /* Why Tanzania Section Styles */
        #why-tanzania {
            background-color: #f5f5f5;
            padding: 2.5em 0;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        #why-tanzania h2 {
            color: green;
        }

        /* Footer Styles */
        footer {
            margin: 1.25em auto;
            text-align: center;
            background-color: whitesmoke;
            width: 100%;
            height: 100px;
            padding-top: 1.25em;
            animation: fadeIn 1s ease-in-out;
        }
        /* Testimonials Section Styles */
#testimonials {
    background-color: whitesmoke;
    padding: 0;
    text-align: center;

}

.testimonial {
    background-color: white;
    padding: 1.25em;
    border-radius: 0.625em;
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 0.1);
    margin: 1.25em;
    display: inline-block;
    width: 15em;
}

.testimonial img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 0.625em;
    margin-left: auto;
    margin-right: auto;
}

.comment {
    font-size: 16px;
    margin-bottom: 0.625em;
}

.rating {
    font-size: 14px;
    color: green; /* Reddish color for ratings */
}

.name {
    font-size: 16px;
    font-weight: bold;
}

/* Newsletter Section Styles */
#newsletter {
    background-color: #333;
    color: white;
    padding: 2.5em 0;
    text-align: center;
}

#newsletter h2 {
    font-size: 24px;
    margin-bottom: 0.625em;
}

#newsletter p {
    font-size: 16px;
    margin-bottom: 1.25em;
}

#subscribe-form {
    display: flex;
    justify-content: center;
    align-items: center;
}

#subscribe-form input[type="email"] {
    padding: 0.625em;
    border: none;
    border-radius: 5px;
    width: 18.75em;
    font-size: 16px;
}

#subscribe-form button {
    background-color: green; /* Reddish color for button */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 0.625em 1.25em;
    font-size: 16px;
    cursor: pointer;
    margin-left: 0.625em;
}

#subscribe-form button:hover {
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 5);
}
    
#blog {
        background-color: #fff;
        padding: 2.5em 0;
        text-align: center;
    }

    #blog h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 1.25em;
    }

    .blog-post {
        background-color: #f9f9f9;
        border-radius: 0.625em;
        box-shadow: 0 0 0.625em rgba(0, 0, 0, 0.1);
        margin: 1.25em;
        padding: 1.25em;
        display: inline-block;
        width: calc(33.33% - 2.5em);
        text-align: left;
    }

    .blog-post img {
        height: 12em;
        border-radius: 5px;
        margin-bottom: 0.625em;
        margin-left: auto;
        margin-right: auto;
        width:100%;

    }

    .blog-post h3 {
        font-size: 18px;
        margin-bottom: 0.625em;
        color: #333;
    }

    .blog-post p {
        font-size: 16px;
        color: #777;
        margin-bottom: 0.625em;
    }

    .blog-post a {
        background-color: green; 
        color: white;
        border: none;
        border-radius: 5px;
        padding: 0.625em 1.25em;
        font-size: 16px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .blog-post a:hover {
        box-shadow: 0 0 0.625em rgba(0, 0, 0, 5);
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
        .overlay{
            position:absolute;
            background-color:rgba(0,0,0,0.5);
            width:100%;
            height:62.5%;
            top:0;
        }
        /* Style for the search form container */
.search-form {
    display: flex;
    align-items: center;
    gap: 0.625em;
    margin-bottom: 1.25em;
}

/* Style for the search label */
.search-label {
    font-size: 16px;
    color: #333;
}

/* Style for the search select dropdown */
.search-select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color:black;
}

/* Style for the search button */
.search-button {
    background-color: #007BFF;
    color: white;
    padding: 0.625em 1.25em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

/* Hover state for the search button */
.search-button:hover {
    background-color: #0056b3;
}

.overlay-dark {
         position: relative;
    }
    .overlay-dark::before {
           
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: rgba(0, 0, 0, 0.5); 
    }

    #hero{
    height:39em;
    max-height:100%;
}
    
.hero-content {
    max-width: 50em;
    margin: 0 auto;
}

#hero .hero-text {
    animation: fadeInUp 1s ease-in-out;
    position: relative;
}

#hero h1 {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 0.625em;
    position: relative;
}

#hero h1.highlight {
    position: relative;
}

#hero p {
    font-size: 18px;
    margin-bottom: 1.25em;
    position: relative;
}

#hero p.highlight {
    font-weight: bold; /* Make the highlighted text bold */
    color: green; /* Highlighted text color */
    position: relative;
}

#hero .cta-button {
    display: inline-block;
    padding: 0.625em 1.25em;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s;
    position: relative;
}

#hero .cta-button:hover {
    box-shadow: 0 0 0.625em rgba(0, 0, 0, 5);
}
    </style>
</head>
<body>
   


   
        <!-- Hero Section -->
<section id="hero" class="animated overlay-dark">
    

<div id="navbar-right" class="animated">
   

   <form id="hospitalSearchForm" class="search-form">
   <select id="hospitalSelect" class="search-select">
       <option value="muhimbili">Muhimbili Hospital</option>
       <option value="agakhan">AgaKhan Hospital</option>
       <option value="hindumandal">Hindu Mandal Hospital</option>
       <option value="kcmc">KCMC Hospital</option>
   </select>
   <button type="button" class="search-button" onclick="searchHospital()">Search</button>
</form>



   </div>

    <div class="hero-content ">
        <div class="hero-text">
            <h1 style="opacity:0;">Welcome to</h1>
            <h1 class="highlight">Internship to Tanzanian Hospitals</h1>
            <p>Your Gateway to</p>
            <h2 class="highlight">Medical Electives in Tanzania</h2>
        </div><br>
        <a href="#electives" class="cta-button" id="explore-electives">Explore Electives</a> &nbsp;

        <a href="form" class="cta-button" >Start Application</a>

    </div>
</section>


    <!-- Featured Destinations Section -->
    <section id="electives" class="animated">
        <div class="left">
            <!-- Muhimbili Hospital -->
          
            <div class="destination" id="muhimbili">
                <img src="images/MUHIMBILI-National-Hospital.jpg" alt="Muhimbili Hospital">
                <section class="info"  >
                    <h3>Muhimbili Hospital</h3>
                    <p>Muhimbili National Hospital, located in Dar es Salaam, is one of the largest and most prestigious medical facilities in Tanzania. It serves as a beacon of healthcare excellence and provides a wide range of clinical experiences for medical students.</p>
                    <p>As an international medical student, you'll have the opportunity to work alongside experienced healthcare professionals, gaining hands-on experience in various specialties. Muhimbili Hospital is renowned for its commitment to patient care and medical education.</p>
                    <a href="https://mnh.or.tz/">Readmore</a>
    </section>
   
            </div>

            <!-- KCMC -->
            
            <div class="destination" id="kcmc">
                <img src="images/kcmc1.jpg" alt="KCMC">
                <section class="info" >
                    <h3>Kilimanjaro Christian Medical Center (KCMC)</h3>
                    <p>Kilimanjaro Christian Medical Center, situated in Moshi at the foot of Mount Kilimanjaro, is a world-class healthcare institution known for its exceptional medical services and commitment to medical education.</p>
                    <p>As a medical student, you'll have the opportunity to immerse yourself in a diverse and challenging clinical environment. KCMC offers a wide range of elective opportunities across various medical disciplines, providing you with invaluable hands-on experience.</p>
                    <a href="https://www.kcmc.ac.tz/">Readmore</a>
    </section>
    
            </div>
            <!-- Featured Destinations Section (Continued) -->
           
            <div class="destination" id="hindumandal">
                <img src="images/hindumadalhosp.jpg" alt="Hindu Mandal Hospital">
                <section class="info" >
                    <h3>Hindu Mandal Hospital</h3>
                    <p>Hindu Mandal Hospital, located in Dar es Salaam, is recognized for its unwavering dedication to healthcare excellence and compassionate patient care.</p>
                    <p>As an international medical student, you'll find a supportive learning environment at Hindu Mandal Hospital. The hospital offers a range of elective opportunities, allowing you to gain valuable clinical experience and contribute to the healthcare needs of the community.</p>
                   <a href="https://www.shm.or.tz/">Readmore</a>
    </section>
   
            </div>

            <!-- Aga Khan Hospital -->
            
            <div class="destination" id="agakhan">
                <img src="images/Aga-Khan-Dar-Header-image.png" alt="Aga Khan Hospital">
                <section class="info" >
                    <h3>Aga Khan Hospital</h3>
                    <p>Aga Khan Hospital, located in Dar es Salaam, is part of the Aga Khan Health Services network, known for its commitment to delivering high-quality healthcare services across the globe.</p>
                    <p>As a medical student at Aga Khan Hospital, you'll have the chance to engage with cutting-edge medical technology and collaborate with skilled healthcare professionals. The hospital offers a range of elective opportunities, making it an ideal destination for your medical journey in Tanzania.</p>
                   <a href="https://www.agakhanhospitals.org/en/dar-es-salaam">Readmore</a>
    </section>
    
            </div>

        </div>

 
        <div class="right">
            <!-- Testimonials Section -->
            <section id="testimonials">
              <div class="testimonial">
                <img src="images/person1.jpg" alt="Person 1">
                <p class="comment">"Great experience! I had an amazing time during my medical elective in Tanzania. The hospital staff were supportive, and I learned a lot."</p>
                <p class="rating">Rating: 4.5/5</p>
                <p class="name">John Doe</p>
              </div>
              <div class="testimonial">
                <img src="images/person2.jpg" alt="Person 2">
                <p class="comment">"Tanzania is a beautiful country, and the medical electives offered here are top-notch. I highly recommend it to fellow medical students."</p>
                <p class="rating">Rating: 5/5</p>
                <p class="name">Jane Smith</p>
              </div>
              <div class="testimonial">
                <img src="images/person3.jpg" alt="Person 3">
                <p class="comment">"I had an enriching experience at Hindu Mandal Hospital. The medical staff were friendly and helped me gain valuable clinical skills."</p>
                <p class="rating">Rating: 4/5</p>
                <p class="name">Michael Johnson</p>
              </div>
              <div class="testimonial">
                <img src="images/person4.jpg" alt="Person 4">
                <p class="comment">"Aga Khan Hospital is truly world-class. I was impressed with the facilities and the mentorship I received during my elective."</p>
                <p class="rating">Rating: 4.8/5</p>
                <p class="name">Emily Davis</p>
              </div>
              <div class="testimonial">
                <img src="images/person5.jpg" alt="Person 5">
                <p class="comment">"KCMC provided a diverse and challenging environment for my medical elective. It broadened my horizons and gave me confidence in my clinical skills."</p>
                <p class="rating">Rating: 4.7/5</p>
                <p class="name">Debora Shamsham</p>
              </div>
            </section> <br> <br> 

            <!-- Newsletter Subscription Form -->
            <section id="newsletter">
              <h2>Subscribe to Our Newsletter</h2>
              <p>Stay updated with the latest news and opportunities in medical electives in Tanzania.</p>
              <form id="subscribe-form">
                <button type="submit">Subscribe</button>
              </form>
            </section>

        </div>
    </section>

    <!-- Blog Section HTML -->
<section id="blog">
    <h2>Latest Blog Posts</h2>
    <div class="blog-post">
        <img src="images/blog-post1.jpg" alt="Blog Post 1">
        <h3>Exploring Tanzanian Culture</h3>
        <p>Discover the rich and diverse culture of Tanzania. From traditional dances to local cuisine, get a glimpse of Tanzanian life.</p>
        <a href="https://www.exploretanzania.com/what-to-do-in-tanzania/culture/">Read More</a>
    </div>
    <div class="blog-post">
        <img src="images/blog-post2.jpg" alt="Blog Post 2">
        <h3>Medical Electives: My Journey</h3>
        <p>Follow the journey of a medical student as they share their experiences and insights during their elective in Tanzania.</p>
        <a href="#">Read More</a>
    </div>
    <div class="blog-post">
        <img src="images/blog-post3.jpg" alt="Blog Post 3">
        <h3>Healthcare in Tanzania</h3>
        <p>Learn about the healthcare system in Tanzania and the challenges and opportunities it presents for medical students.</p>
        <a href="https://www.trade.gov/country-commercial-guides/tanzania-healthcare">Read More</a>
    </div>
    <div class="blog-post">
    <img src="images/blog-post4.jpg" alt="Blog Post 4">
    <h3>Improving Maternal Healthcare</h3>
    <p>Explore the initiatives and efforts aimed at improving maternal healthcare in Tanzania, and the impact on both healthcare professionals and expectant mothers.</p>
    <a href="https://www.cdcfoundation.org/blog/improving-maternal-health-tanzania">Read More</a>
    </div>

</section>



    <!-- Why Tanzania Section -->
    <section id="why-tanzania" class="animated">
        <h2>Why Choose Tanzania for Medical Electives?</h2>
        <p>Ready to embark on a life-changing journey? Tanzania offers world-class medical facilities, diverse patient cases, and a rich cultural experience. Explore opportunities for growth and discovery in the heart of Africa.</p>
    </section>

    <!-- Footer Section -->
    <footer>
        
        &copy; 2023 Internship to Tanzanian Hospitals
        <p>Follow us on social media:</p>
    </footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get a reference to the button and the target section
    const exploreButton = document.getElementById("explore-electives");
    const electivesSection = document.getElementById("electives");

    // Add a click event listener to the button
    exploreButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default jump-to behavior

        // Calculate the scroll position of the electives section
        const targetOffset = electivesSection.getBoundingClientRect().top + window.scrollY;

        // Scroll to the electives section smoothly
        window.scrollTo({
            top: targetOffset,
            behavior: "smooth"
        });
    });
});

function searchHospital() {
        // Get the selected hospital from the dropdown
        var selectedHospital = document.getElementById("hospitalSelect").value;

        // Scroll to the section with the corresponding ID
        var targetSection = document.getElementById(selectedHospital);
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: "smooth" });
        }
    }
</script>

</body>


   
</x-app-layout>

