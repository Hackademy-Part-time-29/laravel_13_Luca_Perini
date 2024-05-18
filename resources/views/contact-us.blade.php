<x-layout>
    <div class="hero">
        <h1>Contact Our {{env('app_NAME')}}!</h1>
        <p>Please insert below your data:</p>
    </div>
    <div class="contact-section">

        <form action="{{route('mail-sent')}}" method="POST">
            @if (session()->has('success'))
            <div class="success-msg" role="alert">
                {{session('success')}}    
            </div>
            @endif 
            @if (session()->has('error'))
            <div class="error-msg" role="alert">
                {{session('error')}}    
            </div>
            @endif 
            @csrf
            <input type="text" name="name" placeholder="First Name"  >

            <input type="text" name="surname" placeholder="Last Name">

            <input type="email" name="email" placeholder="Email" >

            <textarea name="message" placeholder="Your message" ></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</x-layout>