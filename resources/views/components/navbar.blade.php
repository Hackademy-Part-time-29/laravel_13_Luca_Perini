<div class="navbar">
    <a href="{{route('homepage')}}">Home</a>
    <a href="{{route('contact-us')}}">Contact-Us</a>
    @auth
    <div class="user-section">
        <div class="user-avatar"></div>
        <div class="dropdown">
            <button class="dropbtn">Welcome back, {{auth()->user()->name}}!</button>
            <div class="dropdown-content">
                <a href="#" onclick="
                    event.preventDefault();
                    getElementById('form-logout').submit()">Logout</a>
                <form id="form-logout" action="logout" method="POST">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    @else
    <a href={{route('login')}}>Login</a>
    <a href="{{route('register')}}">Register</a>
    @endauth


</div>