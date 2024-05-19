<x-layout>
    <div class="table-container">
        <table class="ticket-table">
            @if(session()->has('success'))
            <div class="success-msg" role="alert">
                {{session('success')}}
            </div>
            @endif
        <thead>
            <tr>
                <th>ID</th>
                <th>OBJECT</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->object}}</td>
                <td>
                    <a href={{route('tickets.show',$ticket)}}>+More </a>
                    <a href={{route('tickets.edit',$ticket)}}><i class="bi bi-pencil-square"></i>Edit</a>
                    <form method="POST" action="{{route('tickets.destroy', $ticket)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn-destroy"><i class="bi bi-trash3"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</x-layout>