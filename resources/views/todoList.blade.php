<x-layout>
    @if($todos->count())
        <ul>
            @foreach ($todos as $todo)
                <li>
                    {{ $todo->todo }}
                    @if ($todo->completed)
                        (Completed)
                    @else
                        (Not Completed)
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>There are no todos to be completed</p>
    @endif
</x-layout>