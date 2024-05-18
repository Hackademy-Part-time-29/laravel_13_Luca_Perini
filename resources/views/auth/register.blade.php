<x-layout>
    <div class="hero">
        <h1>Register to Our {{env('app_NAME')}}</h1>
        <p>Insert below your credentials.</p>
    </div>
    <div class="form-container">
        @if(session()->has('success'))
        <div class="success-msg" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form action="/register" method="POST">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="name" value="{{old('name')}}">
            @error('name')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password" >
            @error('password')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="password_confirmation" >
            @error('password_confirmation')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror

            <button type="submit">Register</button>
        </form>
    </div>
</x-layout>