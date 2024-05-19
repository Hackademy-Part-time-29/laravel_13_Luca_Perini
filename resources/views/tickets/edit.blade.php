<x-layout>
    <form action="{{route('tickets.update', $ticket)}}" method="POST" enctype="multipart/form-data" class="ticket-form">
        @csrf
        @method('PUT')
        @if(session()->has('success'))
        <div class="success-msg" role="alert">
            {{session('success')}}
        </div>
        @endif
        <h2>Create a Ticket</h2>
        <a href={{route('tickets.index')}}><i class="bi bi-list-ul"></i> Show Tickets </a>
        <div class="form-group">
            <label for="subject">Object:</label>
            <input type="text" id="subject" name="object" value="{{old('object', $ticket->object)}}">
            @error('object')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" >{{old('description', $ticket->description)}}</textarea>
            @error('description')
            <div class="error-msg">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Submit Ticket</button>
        
    </form>

</x-layout>