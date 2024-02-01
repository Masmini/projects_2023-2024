<style>
    #navbar {
        width: 100%;
        display: flex;
        align-items: center;
        height: 58px;
        justify-content: left;
        position: fixed;
        top: 0;
        z-index: 1000;
        background-color: white;
    }

    #navbar a {
        text-decoration: none;
        color: green;
        transition: background-color 0.3s;
        background-color: rgba(0, 0, 0, 0);
        color: rgba(0, 0, 0, 0.54);
        font-size: 15px;
        padding-bottom: 19.5px;
        padding-top: 19.5px;
        border-bottom: 2px solid rgba(0, 0, 0, 0);
        margin-right: 40px; /* Add margin-right to create space between links */
    }

    #navbar a:hover {
        color: rgba(0, 0, 0, 0.7);
        border-bottom: 2.5px solid rgba(0, 0, 0, 0.2);
    }

    #navbar a.active {
        color: rgba(0, 0, 0, 0.8);
        border-bottom: 2px solid blue;
    }

    #home {
        margin-left: 9em;
        margin-right: 0; /* Remove margin-right for the "Home" link */
    }
</style>




<nav id="navbar">
    <a href="/home" id="home" class="@if(Request::is('home') || Request::is('/')) active @endif">Home</a>
    <a href="/about" class="@if(Request::is('about')) active @endif">About Us</a>
    <a href="/contactus" class="@if(Request::is('contactus')) active @endif">Contact Us</a>
    <a href="/faq" class="@if(Request::is('faq')) active @endif">FAQs</a> <!-- Add this line for FAQ -->
    <a href="/photos" class="@if(Request::is('photos')) active @endif">Photogallery</a>
    <a href="/login" class="@if(Request::is('login')) active @endif">Sign-In</a>
</nav>

