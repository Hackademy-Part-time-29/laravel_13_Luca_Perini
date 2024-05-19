<x-layout>
    <div class="hero">
        <h2>{{$ticket->object}}</h2>
        <h2>{{$ticket->description}}</h2>
        <img src="{{Storage::url($ticket->image)}}" alt="">
    </div>
</x-layout>