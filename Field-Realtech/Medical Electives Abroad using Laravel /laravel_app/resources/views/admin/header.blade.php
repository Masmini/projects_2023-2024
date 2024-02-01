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
    .logout-link {
        margin-left:45em;
    }
</style>

<nav id="navbar">
    @if (request()->routeIs('admin'))
        <a href="/admin" id="home" class="{{ request()->routeIs('admin') ? 'active' : '' }}">Home</a>
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">User's Page</a> <!-- Add this line for User's Page -->
        <a href="/admin/logout" class="logout-link">Logout</a>
    @else
        <a href="/admin" id="home" class="{{ request()->routeIs('admin') ? 'active' : '' }}">Home</a>
        <a href="/admin/users" class="{{ request()->routeIs('admin.users') ? 'active' : '' }}"> View Users</a>
        <a href="/admin/applications" class="{{ request()->routeIs('admin.applications') ? 'active' : '' }}">View Applications</a>
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">User's Page</a> <!-- Add this line for User's Page -->
        <a href="/admin/logout" class="logout-link">Logout</a>
    @endif
</nav>
