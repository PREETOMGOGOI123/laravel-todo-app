<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <title>Todo App</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <section class="header">
        <a href="/"><h1>Todo Appp</h1></a>
        <nav class="navbar">
            <ul class="flex gap-10 pt-10">
                <li><a href="/todo_list">All Todos</a></li>
                <li><a href ="/new_todo">New Todo</a></li>
                <li><a href="/completed_todos">Completed Todo</a></li>
            </ul>
        </nav>
    </section>
    <section class="main h-[50vh]">
        {{ $slot }}
    </section>
    <div class="footer">
        <p>This is the footer section</p>
    </div>
</body>
</html>