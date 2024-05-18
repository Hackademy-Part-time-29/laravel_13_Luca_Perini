<x-layout>
    <div class="hero">
        <h1>Already have an Account? Login to Our {{env('app_NAME')}}</h1>
        <p>Insert below your credentials.</p>
    </div>
    <div class="form-container">
        @if(session()->has('success'))
        <div class="success-msg" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form action="/login" method="POST">
            @csrf
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
            <button type="submit">Login</button>
        </form>
    </div>
</x-layout>