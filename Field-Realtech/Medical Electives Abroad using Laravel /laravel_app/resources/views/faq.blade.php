<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Internshipstz</title>
    <style>
        /* Reset CSS */
        * {
            padding: 0;
            margin: 0;
        }

        /* Global Styles */
        body {
            margin: 0;
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
            text-align:center;
        }
                   /* Container styles */
        .faq-container {
            max-width: 50em;
            margin: 0 auto;
            padding: 1.25em;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-bottom:10px;
            margin-top: 6.25em;
        }

        /* FAQ item styles */
        .faq-item {
            margin-bottom: 1.25em;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
        }

        /* FAQ question styles */
        .faq-question {
            padding: 15px;
            font-weight: bold;
            cursor: pointer;
            background-color: #f0f0f0;
        }

        /* FAQ answer styles (initially hidden) */
        .faq-answer {
            display: none;
            padding: 15px;
            line-height: 1.5;
        }

        /* Style for when FAQ is open */
        .faq-item.open .faq-answer {
            display: block;
        }

        /* Title styles */
        h1 {
            text-align: center;
            margin-bottom: 1.25em;
            color: #333;
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
    <div class="faq-container animated">
        <h2>Frequently Asked Questions</h2>
        <!-- FAQ items -->
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">What is the application process?</div>
            <div class="faq-answer">
                <p>To apply, please fill out the online application form on our website and submit the required documents. Our admissions team will review your application, and if you meet the criteria, you will receive an email with further instructions.</p>
                <p>The application process typically involves the following steps:</p>
                <ul>
                    <li>Complete the online application form with your personal information.</li>
                    <li>Upload the necessary documents, which may include your CV, academic transcripts, and a statement of purpose.</li>
                    <li>Pay the application fee, if applicable.</li>
                    <li>Wait for our admissions team to review your application.</li>
                    <li>If accepted, you will receive an acceptance email with details on the next steps, including program fees and visa requirements.</li>
                </ul>
                <p>We recommend that you carefully review the specific requirements for your chosen internship program and provide all requested information to expedite the application process.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">How long is the internship duration?</div>
            <div class="faq-answer">
                <p>The internship duration varies depending on the program. It can range from 4 weeks to 12 weeks. You can find specific duration details in the internship listings on our website.</p>
                <p>The duration of an internship is often determined by factors such as the program's objectives, the host hospital's requirements, and your availability. Some programs offer flexibility in choosing your internship duration, while others may have fixed durations based on the medical specialty and learning objectives.</p>
                <p>We recommend that you carefully review the details of each internship listing to ensure that the duration aligns with your goals and schedule.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">What types of accommodations are available?</div>
            <div class="faq-answer">
                <p>We offer various accommodation options to suit your needs. These include shared apartments, homestays with local families, and on-campus dormitories. You can choose the accommodation type that best fits your preferences and budget.</p>
                <p>Here's a brief overview of each accommodation option:</p>
                <ul>
                    <li><strong>Shared Apartments:</strong> These are fully furnished apartments shared with other program participants. They offer more independence and are a great option if you prefer living with fellow students.</li>
                    <li><strong>Homestays:</strong> Living with a local family provides a cultural immersion experience. You'll have the opportunity to engage with the host family, learn about local customs, and practice the language.</li>
                    <li><strong>On-Campus Dormitories:</strong> Some programs provide on-campus dormitory options for convenience and proximity to the hospital. This is an excellent choice if you prefer living closer to the medical facility.</li>
                </ul>
                <p>During the application process, you can indicate your accommodation preferences, and we will do our best to accommodate your choice based on availability.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Is financial assistance available for students?</div>
            <div class="faq-answer">
                <p>Yes, we offer financial assistance programs and scholarships to eligible students. We understand that funding can be a concern, and we strive to make our programs accessible to students from diverse backgrounds.</p>
                <p>Here are some key points about our financial assistance programs:</p>
                <ul>
                    <li><strong>Scholarships:</strong> We offer various scholarships based on academic merit, financial need, and specific criteria. Scholarships can significantly reduce program fees or cover other expenses, such as accommodation or travel.</li>
                    <li><strong>Financial Aid:</strong> We have financial aid options available for students who demonstrate a genuine financial need. Our financial aid team will assess your application and determine the level of assistance you may receive.</li>
                    <li><strong>Application Process:</strong> To apply for financial assistance, please visit our scholarship and financial aid page on our website. There, you will find detailed information on available opportunities and application deadlines.</li>
                </ul>
                <p>We encourage eligible students to explore these opportunities and apply for financial assistance to make their international internship experience more affordable.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Are there language requirements for internships?</div>
            <div class="faq-answer">Language requirements vary depending on the internship placement. While some hospitals may require proficiency in English, others may require knowledge of the local language. You can find language requirements specified in each internship listing on our website.</div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">What is the cost of the internship program?</div>
            <div class="faq-answer">The cost of the internship program varies depending on the specific program, location, and duration. We provide detailed pricing information in the internship listings on our website. Be sure to review the program fees and any additional costs associated with your chosen internship.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">How can I contact your support team?</div>
            <div class="faq-answer">You can reach our support team by emailing support@yourwebsite.com or by filling out the contact form on our "Contact Us" page. We aim to respond to inquiries within 24 hours and provide assistance with any questions or concerns you may have.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Can I apply for multiple internship programs?</div>
            <div class="faq-answer">Yes, you can apply for multiple internship programs. However, please ensure that you meet the eligibility criteria for each program you apply to. Our admissions team will review each application separately, and you may be accepted into multiple programs based on your qualifications.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">Is travel insurance included in the program?</div>
            <div class="faq-answer">Travel insurance is not typically included in the program fees. We recommend that all participants purchase travel insurance to cover unexpected events, such as medical emergencies or trip cancellations. You can purchase travel insurance independently or inquire about options available through your program.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(this)">How do I secure my spot in an internship program?</div>
            <div class="faq-answer">To secure your spot, you should complete the application process, submit all required documents, and pay any applicable program fees. Once these steps are completed and you receive confirmation from our admissions team, your spot in the program will be reserved. Be sure to follow the provided instructions carefully.</div>
        </div>
    </div>
@include('footer')
    <script>
        // JavaScript function to toggle answer visibility
        function toggleAnswer(question) {
            const answer = question.nextElementSibling; // Get the FAQ answer element

            // Toggle the 'open' class to show/hide the answer
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                question.parentNode.classList.remove('open');
            } else {
                answer.style.display = 'block';
                question.parentNode.classList.add('open');
            }
        }
    </script>
</body>
</html>