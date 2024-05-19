<x-layout>
        <form action="{{route('tickets.store')}}" method="POST" enctype="multipart/form-data" class="ticket-form">
            @csrf
            @if(session()->has('success'))
            <div class="success-msg" role="alert">
                {{session('success')}}
            </div>
            @endif
            <h2>Create a Ticket</h2>
            <div class="form-group">
                <label for="subject">Object:</label>
                <input type="text" id="subject" name="object" value="{{old('object')}}">
                @error('object')
                <div class="error-msg">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" >{{old('description')}}</textarea>
                @error('description')
                <div class="error-msg">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="file">Attach File:</label>
                <input type="file" id="file" name="image">
            </div>
            <button type="submit">Submit Ticket</button>
        </form>

</x-layout>