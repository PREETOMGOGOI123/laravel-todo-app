<x-layout>
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="todo" placeholder="Enter your todo here">
        <button type="submit" method="post">Add Todo</button>
    </form>
</x-layout>