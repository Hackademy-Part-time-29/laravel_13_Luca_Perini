<div class="navbar">
    <a href="{{route('homepage')}}"><i class="bi bi-house"></i> Home</a>
    <a href="{{route('contact-us')}}"><i class="bi bi-envelope"></i> Contact-Us</a>
    @auth
    <div class="user-section">
        <div class="user-avatar"></div>
        <div class="dropdown">
            <button class="dropbtn"><i class="bi bi-person"></i> Welcome back, {{auth()->user()->name}}!</button>
            <div class="dropdown-content">
                <a href="#" onclick="
                    event.preventDefault();
                    getElementById('form-logout').submit()"><i class="bi bi-door-open"></i> Logout</a>
                <form id="form-logout" action="logout" method="POST">
                    @csrf
                </form>
                <a href={{route('tickets.create')}}><i class="bi bi-plus-circle"></i> Create Ticket </a>
                <a href={{route('tickets.index')}}><i class="bi bi-list-ul"></i> Show Tickets </a>
            </div>
        </div>
    </div>
    @else
    <a href={{route('login')}}><i class="bi bi-box-arrow-in-right"></i> Login</a>
    <a href="{{route('register')}}"><i class="bi bi-person-add"></i> Register</a>
    @endauth


</div>